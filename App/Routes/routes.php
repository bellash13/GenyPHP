<?php
use GenyPhp\Routers\Router;
 
$router = new Router();

$router->add('GET', '/home', 'App\Controllers\HomeController', 'index');

// Dispatcher
$router->dispatch();
