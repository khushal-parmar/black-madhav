<?php
/**
 * Built-in PHP Development Server Router
 * Usage: php -S localhost:8000 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;

// 1. If static file exists, serve it directly
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    // Provide correct mime types for svg and css
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);
    if ($ext === 'css') {
        header('Content-Type: text/css');
        readfile($filePath);
        return true;
    }
    if ($ext === 'js') {
        header('Content-Type: application/javascript');
        readfile($filePath);
        return true;
    }
    if ($ext === 'svg') {
        header('Content-Type: image/svg+xml');
        readfile($filePath);
        return true;
    }
    return false;
}

// 2. Direct API file routing
if (strpos($uri, '/api/') === 0) {
    $apiFile = __DIR__ . $uri;
    if (file_exists($apiFile)) {
        require $apiFile;
        return true;
    }
    if (file_exists($apiFile . '.php')) {
        require $apiFile . '.php';
        return true;
    }
}

// 3. Direct .php file execution if requested
if (file_exists(__DIR__ . $uri . '.php')) {
    require __DIR__ . $uri . '.php';
    return true;
}

// 4. Default to index.php front controller
require __DIR__ . '/index.php';
return true;
