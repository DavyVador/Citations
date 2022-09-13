<?php

require_once 'Autoloader.php';

use App\Autoloader;
use App\Exception\RouterException;
use App\Service\Router;

Autoloader::$folderList =
    [
        "App/Exception/",
        "App/Service/",
        "App/Controller/",
    ];
Autoloader::register();

session_start();

try {

    $router = new Router($_GET['url']);

    $router->get('/', function () {
        echo (new HomeController())->invoke();
    });

    $router->post('/add', function () {
        (new HomeController())->addCitation();
    });

    $router->run();
} catch (RouterException|Exception $e) {
    die('Error: ' . $e->getMessage());
}


