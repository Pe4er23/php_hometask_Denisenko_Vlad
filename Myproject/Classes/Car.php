<?php
namespace Myhomework\Myproject\Classes;
class Car extends Vehicle {
public $year;

public function __construct($brand, $model, $year) {
parent::__construct($brand, $model);
$this->year = $year;
}

public function getInfo() {
return parent::getInfo() . ", Year: " . $this->year;
}
}