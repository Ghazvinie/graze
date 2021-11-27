<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesView.class.php';

$accountId = $_POST['account_id'];
$controller = new BoxesController();

$data = $controller->getBoxesData($accountId);

$boxesView = new BoxesView($data);
$controller->renderView('boxes');
