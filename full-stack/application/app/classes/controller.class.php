<?php

class Controller {

    /**
     * @param viewsDirectory Views directory
     */

    public $viewsDirectory;

    public function __construct()
    {
        $this->viewsDirectory = dirname(__DIR__, 2) . '/public/views/';
    }

    // Render specified view
    public function renderView($view){
        return include_once($this->viewsDirectory . $view. '.php');
    }
}