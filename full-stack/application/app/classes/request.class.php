<?php

class Request
{
    /**
     * @param uri Request path
     * @param method Request method
     */

    public $uri;
    public $method;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
}