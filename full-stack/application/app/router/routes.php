<?php
require dirname(__DIR__) . '/classes/router.class.php';

$route = new Router();

// Home Routes
$route->get('/', 'homeController');
$route->get('', 'homeController');

$route->post('/boxes', 'boxes.php');  // Boxes POST Route
$route->post('/changerating', 'boxes.php');
