<?php
require_once dirname(__FILE__) . '/request.class.php';

class Router extends Request
{
    private $success = false;

    public function get($route, $view)
    {


        if ($this->method !== 'GET') {
            return false;
        };

        
        if ($this->uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__, 2) . '/public/views/' . $view);
        };
    }

    public function post($route, $view)
    {
      
        if ($this->method !== 'POST') {
            return false;
        };


        if ($this->uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__, 2) . '/public/views/' . $view);
        };
    }


    function __destruct()
    {
        if (!$this->success) {
            return include_once(dirname(__DIR__, 2) . '/public/views/' . '404.php');
        };
    }
}
