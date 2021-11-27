<?php
require_once dirname(__DIR__, 1) . '/classes/homecontroller.class.php';

$controller = new HomeController();
$controller->homeGet($route);