<?php

class HomeController
{   
    public function index(): void
    {
        $jsonString = file_get_contents(__DIR__ . '/../data/home.json');
        $data = json_decode($jsonString);

        ob_start();
        require_once __DIR__ . '/../Views/HomeView.php';
        $content = ob_get_clean();

        require_once __DIR__ . '/../Views/base.php';
    }
}
