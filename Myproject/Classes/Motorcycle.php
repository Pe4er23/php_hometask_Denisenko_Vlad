<?php
namespace Myhomework\Myproject\Classes;

class Motorcycle extends Vehicle {
public $type;

public function __construct($brand, $model, $type) {
parent::__construct($brand, $model);
$this->type = $type;
}

public function getInfo() {
return parent::getInfo() . ", Type: " . $this->type;
}
}