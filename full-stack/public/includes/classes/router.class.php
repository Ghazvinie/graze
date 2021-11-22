<?php

class Router
{
    private $success = false;

    public function get($route, $view)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            return false;
        };

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__) . '/views/' . $view);
        };
    }

    public function post($route, $view)
    {
      
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        };

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__) .'/views/' . $view);
        };
    }


    function __destruct()
    {
        if (!$this->success) {
            return include_once(dirname(__DIR__) .'/views/' . '404.php');
        };
    }
}