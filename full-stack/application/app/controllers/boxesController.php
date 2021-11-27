<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';

$controller = new BoxesController();
$controller->boxesPost('boxes');