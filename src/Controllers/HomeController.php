<?php

namespace Codespace\PhpTools\Controllers;

class HomeController
{

    /**
     * @return void
     */
    public function index(): void
    {
        require_once './src/Views/Home.php';
    }

    /**
     * @return void
     */
    public function info(): void
    {
        require_once './src/Views/Info.php';
    }

}