<?php
/**
 * Layout Component for Black Madhav
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/Navbar.php';
require_once __DIR__ . '/Footer.php';
require_once __DIR__ . '/LoadingScreen.php';

function renderHeader(string $title = '', string $currentPath = '/', bool $showLoading = false) {
    $fullTitle = $title ? e($title) . ' | ' . APP_SHORT_NAME : APP_NAME . ' | ' . APP_TAGLINE;
    ?>
<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="<?= base_url('assets/favicon.svg') ?>" />
    <meta name="author" content="Vandit Katbamna">
    <meta name="developer" content="Vandit Katbamna">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $fullTitle ?></title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Main Compiled Tailwind Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <!-- Custom Stylesheet for 3D flip card, loading animations -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
  </head>
  <body class="font-sans antialiased bg-slate-50 text-slate-900 selection:bg-blue-600 selection:text-white">
    <?php if ($showLoading): ?>
      <?php renderLoadingScreen(); ?>
    <?php endif; ?>
    <?php renderNavbar($currentPath); ?>
    <main class="min-h-screen">
    <?php
}

function renderFooterLayout() {
    ?>
    </main>
    <?php renderFooter(); ?>
    <!-- Application Interactive Client Script -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
  </body>
</html>
    <?php
}
