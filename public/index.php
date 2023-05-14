<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Handler\Contact;
use App\Router;

$router = new Router();

$router->get('/', function () {
    echo 'homepage';
});

$router->get('/about', function (array $params) {
    if (!empty($params['name'])) {
        echo 'Hello ' . $params['name'];
    } else {
        echo 'Hello Guest';
    }
});

//$router->get('/contact', Contact::class . '::execute');
$router->get('/contact', [new Contact(), 'execute']);
$router->post('/contact', function ($params){
    var_dump($params);
});


$router->addNotFoundHandler(function () {
    $title = "Sorry not found";
    require_once __DIR__ . '/../templates/404.phtml';
});

$router->run();