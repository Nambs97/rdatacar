<?php

$router->add('/', function () {
    $controller = new RTech\RDataCar\Controllers\HomeController();
    echo $controller->show();
});

$router->add('/hello', function () use ($router) {
    echo $router->view_display('hello.php');
});
