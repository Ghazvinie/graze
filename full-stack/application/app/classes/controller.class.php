<?php

class Controller {

    public $viewsDirectory;

    public function __construct()
    {
        $this->viewsDirectory = dirname(__DIR__, 2) . '/public/views/';
    }
}