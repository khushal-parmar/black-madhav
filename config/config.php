<?php
/**
 * Black Madhav Digital Solutions - Global Configuration
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// App Settings
define('APP_NAME', 'Black Madhav Digital Solutions');
define('APP_SHORT_NAME', 'Black Madhav');
define('APP_TAGLINE', 'We Build Digital Solutions That Grow Your Business');
define('APP_EMAIL', 'blackmadhavdigitalsolutions@gmail.com');
define('APP_PHONE', '+91 8128730715');
define('APP_YEAR', date('Y'));

// Inquiry Email Settings
// Every Contact / Inquiry form submission is emailed to MAIL_TO.
define('MAIL_TO', APP_EMAIL);
define('MAIL_FROM', 'noreply@' . (preg_replace('/[^a-z0-9.\-]/i', '', preg_replace('/^www\./', '', explode(':', $_SERVER['HTTP_HOST'] ?? 'localhost')[0])) ?: 'localhost'));
define('MAIL_FROM_NAME', APP_NAME);

// Optional SMTP (recommended: Gmail inbox delivery is far more reliable than PHP mail()).
// Leave SMTP_HOST empty to use the server's built-in mail().
// Gmail example: host smtp.gmail.com, port 465, secure ssl, user = your gmail, pass = 16-char App Password.
define('SMTP_HOST', '');
define('SMTP_PORT', 465);
define('SMTP_SECURE', 'ssl');   // 'ssl' (port 465) or 'tls' (port 587)
define('SMTP_USER', '');
define('SMTP_PASS', '');

// Storage Keys
define('CONTACT_STORAGE_KEY', 'contactSubmissions');
define('BLOG_STORAGE_KEY', 'blogPosts');

// Base Paths
define('ROOT_PATH', dirname(__DIR__));
define('DATA_PATH', ROOT_PATH . '/data');
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('UPLOADS_PATH', ROOT_PATH . '/assets/uploads');

// Create required directories if not exist
if (!is_dir(DATA_PATH)) {
    mkdir(DATA_PATH, 0777, true);
}
if (!is_dir(UPLOADS_PATH)) {
    mkdir(UPLOADS_PATH, 0777, true);
}

// Database Configuration
define('DB_FILE', DATA_PATH . '/black_madhav.sqlite');
define('JSON_CONTACTS_FILE', DATA_PATH . '/contacts.json');
define('JSON_BLOG_FILE', DATA_PATH . '/blog.json');

// Helper function to get base URL
function base_url($path = '') {
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = dirname($scriptName);
    $base = ($dir === '/' || $dir === '\\') ? '' : rtrim(str_replace('\\', '/', $dir), '/');
    return $base . '/' . ltrim($path, '/');
}

// Helper function to safely output HTML
function e($string) {
    return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
}
