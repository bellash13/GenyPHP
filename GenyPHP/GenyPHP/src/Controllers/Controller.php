<?php
// GenyPhp/Controllers/Controller.php

namespace GenyPhp\Controllers;

class Controller {
    // Common properties and methods for all controllers
    protected function render($view, $data = []) {
        array_walk_recursive($data, function (&$item) {
            $item = htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
        });

        extract($data);
        $controller = strtolower((new \ReflectionClass($this))->getShortName());
        $controllerName = str_replace('controller', '', $controller);
        include __DIR__ . "/../../../App/Views/$controllerName/$view.php";
    }

    // Other common methods can be added here
}
