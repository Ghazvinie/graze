<?php
require_once dirname(__FILE__) . '/request.class.php';

class Router extends Request
{
    /**
     * @param success Routing has been completed successfully
     */

    private $success = false;

    // Server get requests
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

    // Serve post requests
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

    // Send to 404 on success failure
    function __destruct()
    {
        if (!$this->success) {
            return include_once(dirname(__DIR__, 2) . '/public/views/' . '404.php');
        };
    }
}
