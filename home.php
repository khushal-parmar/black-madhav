<?php
require_once __DIR__ . '/components/Layout.php';
renderHeader('Home', '/', true);
require __DIR__ . '/views/home.php';
renderFooterLayout();
