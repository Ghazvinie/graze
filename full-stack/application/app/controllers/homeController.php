<?php
require_once dirname(__DIR__, 1) . '/classes/HomeController.class.php';

$controller = new HomeController();
$controller->homeGet('home');