<?php

namespace application\core;

class Router
{   
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        echo 'I am the class Router';
    }

    public function add()
    {
        // 
    }

    public function match()
    {
        // 
    }

    public function run()
    {
        echo 'start';
    }
}