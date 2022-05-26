<?php
session_start();

use application\core\Router;
require './application/lib/Dev.php';

echo 'Hello world!!!';

spl_autoload_register(function($class){
    $path = str_replace('\\', '/',$class.'.php');
    if(file_exists($path)){
        require $path;
    }
    echo '<p>'.$class.'</p>';
    echo '<p>'.$path.'</p>';
});

$router = new Router;
echo '<br>';

$router->run();
