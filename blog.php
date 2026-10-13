<?php
require_once __DIR__ . '/components/Layout.php';
renderHeader('Blog', '/blog');
require __DIR__ . '/views/blog.php';
renderFooterLayout();
