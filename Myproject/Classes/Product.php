<?php

namespace Myhomework\Myproject\Classes;
use Myhomework\Myproject\Classes\Traits\DiscountTrait;

class Product
{
    public $name;
    public $price;

    use DiscountTrait;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}