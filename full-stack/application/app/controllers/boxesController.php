<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';
require_once dirname(__DIR__, 1) . '/models/boxesModel.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesTest.class.php';


$controller = new BoxesController();
$data = $controller->getBoxesData(170111, new BoxesModel());

// $boxesView = new BoxesView($data);
$controller->renderView('boxes');