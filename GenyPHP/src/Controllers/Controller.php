<?php
// GenyPhp/Controllers/Controller.php

namespace GenyPhp\Controllers;

class Controller {
    protected $request = [];

    public function __construct() {
        $this->bindData();
    }

    protected function bindData() {
        $this->request = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET;
    }
    protected function render($view, $data = [], $layout = 'Shared/layout') {
        array_walk_recursive($data, function (&$item) {
            $item = htmlspecialchars($item, ENT_QUOTES, 'UTF-8');
        });

        extract($data);

        ob_start();
        include __DIR__ . "/../../../App/Views/$view.php";
        $content = ob_get_clean();

        if ($layout) {
            include __DIR__ . "/../../../App/Views/$layout.php";
        } else {
            echo $content;
        }
    }

    // Other common methods can be added here
}
