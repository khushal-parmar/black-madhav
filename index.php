<?php
/**
 * Black Madhav Digital Solutions - Front Controller
 * Converted from React (src/main.jsx & src/App.jsx)
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/App.php';

$app = new App();
$app->run();
