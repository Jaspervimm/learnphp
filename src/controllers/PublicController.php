<?php

namespace App\Controllers;

class PublicController {

    public function index(){
        $name = $_GET['name'] ?? 'Nameless';
        $fruits = ['Apple', 'Banana', 'Cherry', 'Pear'];
        include 'views/index.php';
    }

    public function page1(){
        include 'views/page1.php';
    }

    public function page2(){
        include 'views/page2.php';
    }
}