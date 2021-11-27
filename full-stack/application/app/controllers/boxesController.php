<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesView.class.php';

$accountId = $_POST['account_id'];
$num = $_POST['rating'];
$productId = $_POST['product_id'];

$controller = new BoxesController();

if (isset($accountId)){
    $controller->setAccountId($accountId);
    $data = $controller->getBoxesData();
    $boxesView = new BoxesView($data);
    $controller->renderView('boxes');
};

if (isset($num) && isset($productId)){
    $controller->setProductRating($num, $productId);
    $data = $controller->getBoxesData();
    $controller->renderView('boxes');
};