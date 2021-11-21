<?php

class Router
{
    private $success = false;

    public function get($route, $view)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            echo 'hio';
            return false;
        };

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === $route) {
            $this->success = true;
            return include_once('/var/www/public/includes/views/' . $view);
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
            return include_once(__DIR__ . './views/' . $view);
        };
    }


    function __destruct()
    {
        if (!$this->success) {
            return include_once('/var/www/public/includes/views/' . '404.php');
        };
    }
}
