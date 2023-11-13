<?php
use GenyPhp\Routers\Router;
 
$router = new Router();

$router->add('GET', '/', 'App\Controllers\HomeController', 'index');
$router->add('GET', '/home', 'App\Controllers\HomeController', 'index');
$router->add('GET', '/create', 'App\Controllers\HomeController', 'create');
$router->add('POST', '/create', 'App\Controllers\HomeController', 'create');

// Dispatcher
$router->dispatch();
