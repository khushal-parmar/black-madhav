<?php
/**
 * Mailer - sends inquiry emails (SMTP if configured, otherwise PHP mail()).
 */

require_once __DIR__ . '/../config/config.php';

class Mailer {
    private static function clean(string $v): string {
        return trim(preg_replace('/[\r\n]+/', ' ', $v));
    }

    /**
     * Send an inquiry notification to MAIL_TO. Returns true on success.
     */
    public static function sendInquiry(array $s, string $subjectPrefix = 'New Website Inquiry'): bool {
        $name    = self::clean($s['name'] ?? '');
        $email   = self::clean($s['email'] ?? '');
        $phone   = self::clean($s['phone'] ?? '');
        $biz     = self::clean($s['businessName'] ?? '');
        $service = self::clean($s['service'] ?? '');
        $details = trim($s['projectDetails'] ?? '');

        $subject = $subjectPrefix . ' - ' . $name;
        $body  = "You have received a new inquiry from your website.\r\n\r\n";
        $body .= "Name: {$name}\r\n";
        if ($biz !== '')     $body .= "Business: {$biz}\r\n";
        $body .= "Email: {$email}\r\n";
        $body .= "Phone: {$phone}\r\n";
        if ($service !== '') $body .= "Service: {$service}\r\n";
        $body .= "\r\nMessage:\r\n{$details}\r\n\r\n";
        $body .= "Received: " . date('d M Y, h:i A') . "\r\n";

        $replyTo = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';

        try {
            if (SMTP_HOST !== '') {
                return self::sendSmtp(MAIL_TO, $subject, $body, $replyTo);
            }
            $headers  = 'From: ' . self::clean(MAIL_FROM_NAME) . ' <' . MAIL_FROM . ">\r\n";
            if ($replyTo !== '') $headers .= "Reply-To: {$replyTo}\r\n";
            $headers .= "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\n";
            $ok = @mail(MAIL_TO, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, $headers);
            if (!$ok) self::log('mail() returned false');
            return $ok;
        } catch (Throwable $e) {
            self::log($e->getMessage());
            return false;
        }
    }

    private static function sendSmtp(string $to, string $subject, string $body, string $replyTo): bool {
        $secure = strtolower(SMTP_SECURE);
        $host = ($secure === 'ssl' ? 'ssl://' : '') . SMTP_HOST;
        $fp = @stream_socket_client($host . ':' . SMTP_PORT, $errno, $errstr, 15);
        if (!$fp) { self::log("SMTP connect failed: $errstr"); return false; }
        stream_set_timeout($fp, 15);

        $read = function () use ($fp) {
            $out = '';
            while (($line = fgets($fp, 515)) !== false) {
                $out .= $line;
                if (strlen($line) < 4 || $line[3] === ' ') break;
            }
            return $out;
        };
        $cmd = function (string $c, string $expect) use ($fp, $read) {
            fwrite($fp, $c . "\r\n");
            $r = $read();
            if (strpos($r, $expect) !== 0) throw new RuntimeException("SMTP error on '" . explode(' ', $c)[0] . "': " . trim($r));
            return $r;
        };

        try {
            $r = $read();
            if (strpos($r, '220') !== 0) throw new RuntimeException('SMTP greeting: ' . trim($r));
            $cmd('EHLO ' . (gethostname() ?: 'localhost'), '250');
            if ($secure === 'tls') {
                $cmd('STARTTLS', '220');
                if (!stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) throw new RuntimeException('STARTTLS failed');
                $cmd('EHLO ' . (gethostname() ?: 'localhost'), '250');
            }
            if (SMTP_USER !== '') {
                $cmd('AUTH LOGIN', '334');
                $cmd(base64_encode(SMTP_USER), '334');
                $cmd(base64_encode(SMTP_PASS), '235');
            }
            $from = SMTP_USER !== '' && filter_var(SMTP_USER, FILTER_VALIDATE_EMAIL) ? SMTP_USER : MAIL_FROM;
            $cmd('MAIL FROM:<' . $from . '>', '250');
            $cmd('RCPT TO:<' . $to . '>', '250');
            $cmd('DATA', '354');

            $headers  = 'From: ' . self::clean(MAIL_FROM_NAME) . ' <' . $from . ">\r\n";
            $headers .= 'To: ' . $to . "\r\n";
            if ($replyTo !== '') $headers .= "Reply-To: {$replyTo}\r\n";
            $headers .= 'Subject: =?UTF-8?B?' . base64_encode($subject) . "?=\r\n";
            $headers .= 'Date: ' . date('r') . "\r\n";
            $headers .= "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n";

            $data = $headers . "\r\n" . chunk_split(base64_encode($body));
            fwrite($fp, $data . "\r\n.\r\n");
            $r = $read();
            if (strpos($r, '250') !== 0) throw new RuntimeException('SMTP DATA rejected: ' . trim($r));
            $cmd('QUIT', '221');
            fclose($fp);
            return true;
        } catch (Throwable $e) {
            self::log($e->getMessage());
            @fclose($fp);
            return false;
        }
    }

    private static function log(string $msg): void {
        @file_put_contents(DATA_PATH . '/mail_error.log', '[' . date('c') . '] ' . $msg . "\n", FILE_APPEND);
    }
}
