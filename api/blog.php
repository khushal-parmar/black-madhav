<?php
/**
 * API: Blog Posts CRUD
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../lib/Database.php';
require_once __DIR__ . '/../lib/Validator.php';

header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// Handle PUT / DELETE through request parameters or headers
if ($method === 'POST' && isset($_POST['_method'])) {
    $method = strtoupper($_POST['_method']);
} elseif ($method === 'POST' && isset($_GET['_method'])) {
    $method = strtoupper($_GET['_method']);
}

// GET - List all blog posts or single post
if ($method === 'GET') {
    if (isset($_GET['id'])) {
        $post = Database::getBlogPostById((int)$_GET['id']);
        if (!$post) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Post not found']);
            exit;
        }
        echo json_encode(['success' => true, 'data' => $post]);
        exit;
    }

    $posts = Database::getBlogPosts();
    echo json_encode(['success' => true, 'data' => $posts]);
    exit;
}

// Blog is read-only on the public site.
http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
