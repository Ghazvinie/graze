<?php
require dirname(__DIR__) . '/classes/Controller.class.php';

class BoxesController extends Controller
{
    public function boxesPost($view)
    {

        
        // Render the view
        return $this->renderView($view);
    }
}
