<?php
require '/var/www/public/includes/classes/route.php';

$route = new Router();
$route->post('/boxes', 'boxes.php');
$route->get('/', 'home.php');
$route->get('', 'home.php');
