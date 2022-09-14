<?php

require_once 'Autoloader.php';
require_once 'config/config.php';

use App\Autoloader;
use App\Controller\Front\HomeController;
use App\Exception\RouterException;
use App\Service\Router;

Autoloader::$folderList =
    [
        "App/Entity/",
        "App/Exception/",
        "App/Service/",
        "App/Controller/Front/",
        "App/Repository/",
        "App/Form/",
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


