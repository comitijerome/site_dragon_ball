<?php

require 'Controllers/HomeController.php';
require 'Controllers/ErrorController.php';

$params = $_GET;
$page = 'home';
if (isset($params['page'])) {
    $page = $params['page'];
}

// en fonction de page afficher page= home, ou page not found utilier requiere $controller= new error controller ou home controller
switch ($page) {
    case '':
    case 'home':
        $controller = new HomeController(); 
        $controller->index();
        break;

    default:
        $controller = new ErrorController(); 
        $controller->pageNotFound(); 
}
