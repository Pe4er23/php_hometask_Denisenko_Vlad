<?php

namespace Myhomework\Myproject\Classes;
class Vehicle
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo()
    {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}