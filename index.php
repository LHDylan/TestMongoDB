<?php

use App\Controller\JoController;

require __DIR__ . '/vendor/autoload.php';

if (isset($_GET['c'])) {

    if (isset($_GET['a'])) {

        $controller = new JoController();
        $controller->start($_GET['a']);

    } else {
        
        $controller = new JoController();
        $controller->start();
    }
}