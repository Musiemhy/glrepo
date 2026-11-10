<?php
include('../inc/includes.php');
$target = dirname(__DIR__) . '/plugins/userperformance/front/dashboard.php';
if (is_file($target)) {
    require $target;
} else {
    echo "Dashboard file not found.";
}
