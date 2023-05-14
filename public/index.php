<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->get('/', function () {
    echo 'homepage';
});

$router->get('/about', function () {
    echo 'about';
});

$router->addNotFoundHandler(function () {
    echo "Page not found";
});

$router->run();