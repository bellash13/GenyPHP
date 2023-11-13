<?php
// GenyPHP/src/Routers/Router.php

namespace GenyPhp\Routers;

class Router {
    private $routes = [];
    public function __construct() {
        $_GET = $this->sanitize($_GET);
        $_POST = $this->sanitize($_POST);
        // $_SERVER = $this->sanitize($_SERVER);
        $_COOKIE= $this->sanitize($_COOKIE);
        $_REQUEST= $this->sanitize($_REQUEST);
        // Add other global arrays like $_COOKIE if needed
    }
    public function add($method, $path, $controller, $action) {
        $this->routes[strtoupper($method)][$path] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        //
        // Remove subdirectory part if application is in a subdirectory
        $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
        $path = preg_replace('#^' . preg_quote($scriptDir, '#') . '#', '', $uri);

        foreach ($this->routes[$method] ?? [] as $routePath => $handler) {
            if ($path === $routePath) {
                $controller = new $handler['controller'];
                $action = $handler['action'];
                $controller->$action();
                return;
            }
        }

        // Gérer l'absence de route correspondante
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
    private function sanitize($data) {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = $this->sanitize($value);
            }
            return $data;
        } else {
            return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        }
    }
    
}
