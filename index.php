<?php
//autoload
require './vendor/autoload.php';

//require_once Models, Controllers
require_once './src/Models/Router.php';
require_once './src/Controllers/HomeController.php';

//load Class
use Codespace\PhpTools\Models\Router;

const BASE_URL = '/mvc';

$router = new Router();

$router->addRoute('GET', BASE_URL.'/home', '\Controllers\HomeController', 'index');
$router->addRoute('GET', BASE_URL. '/info', '\Controllers\HomeController', 'info');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$handler = $router->gethandler($method, $uri);

if ($handler == null ) { 

    header ('HTTP/1.1 404 not found');
    exit();
}

$controller = new $handler['controller']();
$action = $handler['action'];
$controller->$action();