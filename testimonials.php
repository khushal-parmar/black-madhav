<?php
require_once __DIR__ . '/components/Layout.php';
renderHeader('Testimonials', '/testimonials');
require __DIR__ . '/views/testimonials.php';
renderFooterLayout();
