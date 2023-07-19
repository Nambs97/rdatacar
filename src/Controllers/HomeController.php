<?php

namespace RTech\RDataCar\Controllers;

use RTech\RDataCar\Providers\Router;

class HomeController
{
    public function __construct()
    {
    }

    public function show()
    {
        $router = new Router();

        return $router->view_display('home.php');
        //return "Hello World!";
    }
}
