<?php
require_once __DIR__ . '/components/Layout.php';
renderHeader('Portfolio', '/portfolio');
require __DIR__ . '/views/portfolio.php';
renderFooterLayout();
