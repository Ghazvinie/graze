<?php

class Controller {

    public $viewsDirectory;

    public function __construct()
    {
        $this->viewsDirectory = dirname(__DIR__, 2) . '/public/views/';
    }

    public function renderView($view){
        return include_once($this->viewsDirectory . $view. '.php');
    }
}