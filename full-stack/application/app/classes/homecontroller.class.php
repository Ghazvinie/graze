<?php
require dirname(__DIR__) . '/classes/controller.class.php';

class HomeController extends Controller
{
    public function homeGet($route)
    {
        // Get the correct view and require it
        return include_once($this->viewsDirectory . 'home.php');
    }
}
