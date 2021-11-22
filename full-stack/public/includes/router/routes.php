<?php
require dirname(__DIR__) . '/classes/router.class.php';


$route = new Router();

// Home Routes
$route->get('/', 'home.php');
$route->get('', 'home.php');

$route->post('/boxes', 'boxes.php');  // Boxes POST Route
