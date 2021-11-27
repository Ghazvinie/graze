<?php
require_once dirname(__DIR__, 1) . '/classes/BoxesController.class.php';
require_once dirname(__DIR__, 1) . '/classes/BoxesView.class.php';

$accountId = $_POST['account_id']; // Get the account id
$num = $_POST['rating']; // Get the rating value
$productId = $_POST['product_id']; // Get the product id

$controller = new BoxesController();

// Account id provided only - displays boxes
if (isset($accountId)){
    $cleanId = $controller->sanitiseNum($accountId);
    $controller->setAccountId($cleanId);
    $data = $controller->getBoxesData();
    $boxesView = new BoxesView($data);
    $controller->renderView('boxes');
};

// Rating and product id provided - change rating, then display boxes
if (isset($num) && isset($productId)){
    $cleanNum = $controller->sanitiseNum($num);
    $cleanId = $controller->sanitiseNum($productId);
    $controller->setProductRating($cleanNum, $cleanId);
    $data = $controller->getBoxesData();
    $controller->renderView('boxes');
};
