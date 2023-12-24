<?php

namespace Codespace\PhpTools\Controllers;

class HomeController
{

    public function index(): void
    {
        require_once './src/Views/Home.php';
    }

    public function info(): void
    {
        require_once './src/Views/Info.php';
    }

}