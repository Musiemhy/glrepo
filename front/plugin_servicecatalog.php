<?php
$page = $_GET['page'] ?? 'config';
$allowed = ['config', 'categories', 'types', 'items', 'selector', 'incidents', 'requests'];

if (!in_array($page, $allowed, true)) {
    http_response_code(404);
    die('Invalid page requested');
}

$target = dirname(__DIR__) . '/plugins/servicecatalog/front/' . $page . '.php';

if (!is_file($target)) {
    http_response_code(404);
    die('Page file not found: ' . $target);
}

require $target;
