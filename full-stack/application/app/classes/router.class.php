<?php
require_once dirname(__FILE__) . '/Request.class.php';

class Router extends Request
{
    /**
     * @param success Routing has been completed successfully
     */

    private $success = false;

    // Server get requests
    public function get($route, $controller)
    {

        if ($this->method !== 'GET') {
            return false;
        };

        if ($this->uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__, 1) . '/controllers/' . $controller . '.php');
        };
    }

    // Serve post requests
    public function post($route, $controller)
    {
        if ($this->method !== 'POST') {
            return false;
        };

        if ($this->uri === $route) {
            $this->success = true;
            return include_once(dirname(__DIR__, 1) . '/controllers/' . $controller . '.php');
        };
    }

    // Send to 404 on non-success
    function __destruct()
    {
        if (!$this->success) {
            return include_once(dirname(__DIR__, 2) . '/public/views/' . '404.php');
        };
    }
};