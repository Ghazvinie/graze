<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesView.class.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesTest.class.php';

$boxesModel = new BoxesModel();
$controller = new BoxesController();

$data = $controller->getBoxesData(170111, $boxesModel);

$boxesView = new BoxesView($data);
$controller->renderView('boxes');