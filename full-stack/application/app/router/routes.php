<?php
require dirname(__DIR__) . '/classes/Router.class.php';

$route = new Router();

// Home Routes
$route->get('/', 'homeController');
$route->get('', 'homeController');

$route->post('/boxes', 'boxesController');  // Boxes POST Route
$route->post('/changerating', 'boxes.php');
