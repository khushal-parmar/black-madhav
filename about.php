<?php
require_once __DIR__ . '/components/Layout.php';
renderHeader('About Us', '/about');
require __DIR__ . '/views/about.php';
renderFooterLayout();
