<?php
/**
 * API: Contact / Inquiry form
 * Saves the inquiry (backup) and emails it to MAIL_TO.
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lib/Database.php';
require_once __DIR__ . '/../lib/Validator.php';
require_once __DIR__ . '/../lib/Mailer.php';

header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Read input from POST or JSON body
$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true) ?: $_POST;

$validation = Validator::validateContact($data);
if (!$validation['isValid']) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $validation['firstError'],
        'errors' => $validation['errors']
    ]);
    exit;
}

// Never trust client-supplied id/date
unset($data['id'], $data['submittedAt']);

$submission = Database::addContactSubmission($data);
$mailed = Mailer::sendInquiry($submission);

echo json_encode([
    'success' => true,
    'emailed' => $mailed,
    'message' => 'Thank you! Your message has been sent. We will contact you soon.'
]);
