<?php
require_once dirname(__FILE__) . '/BoxesModel.class.php';

class Controller extends BoxesModel {

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
        return require_once($this->viewsDirectory . $view. '.php');
    }
}