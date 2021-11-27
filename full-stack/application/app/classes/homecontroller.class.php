<?php
require dirname(__DIR__) . '/classes/controller.class.php';

class HomeController extends Controller
{
    public function homeGet($view)
    {
        // Get the correct view and require it
        return $this->renderView($view);
    }
}
