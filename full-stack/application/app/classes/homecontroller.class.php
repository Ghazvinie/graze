<?php
require dirname(__DIR__) . '/classes/Controller.class.php';

class HomeController extends Controller
{
    public function homeGet($view)
    {
        // Render the view
        return $this->renderView($view);
    }
};