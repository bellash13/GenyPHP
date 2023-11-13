<?php
// App/Controllers/HomeController.php

namespace App\Controllers;
use GenyPhp\Controllers\Controller;

class HomeController extends  Controller{
    public function index() {
        $data = ['title' => 'Welcome to GenyPHP!'];
        $this->render('index', $data);
    }
    public function create() {
        extract($_POST);
        $data = ['firstName' => $firstName, 'title' => 'You posted'];
        $this->render('index', $data);
    }
}
