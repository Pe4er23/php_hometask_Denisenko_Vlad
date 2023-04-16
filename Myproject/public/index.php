<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Myhomework\Myproject\Classes\MyClass;
use Myhomework\Myproject\Classes\Car;
use Myhomework\Myproject\Classes\PayPal;
use Myhomework\Myproject\Classes\Motorcycle;
//use Myhomework\Myproject\Classes\Shape;
//use Myhomework\Myproject\Classes\Traits\DiscountTrait;
//use Myhomework\Myproject\Classes\Interfaces\PaymentInterface;
//use Myhomework\Myproject\Classes\Product;



$car = new Car('BMW','M6', '2033');
//echo $car->getInfo() . PHP_EOL;
$motorcycle = new Motorcycle('Honda', 'CBR', 'Sport');
//echo $motorcycle->getInfo() . PHP_EOL;
//$paypal = new Paypal();
//$paypal->pay(100);
$myClass = new MyClass();
//echo $myClass::MY_CONST;


$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../template');


$smarty->assign('name', 'Vlad');
$smarty->assign('age', '19');
$smarty->assign('town', 'Kropivnitskiy');
$smarty->display('index.tpl');


?>