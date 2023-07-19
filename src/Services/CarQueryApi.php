<?php

namespace RTech\RDataCar\Services;

class CarQueryApi
{
    private $models = [];

    public function getModels()
    {
        $this->models = ['Audi', 'Mercedes'];
        return $this->models;
    }
}
