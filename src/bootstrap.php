<?php

define('BASEPATH', __DIR__);
    
$autoloader = require __DIR__ . '/../vendor/autoload.php';

require('Providers/Router.php');
    
$router = new RTech\RDataCar\Providers\Router();
