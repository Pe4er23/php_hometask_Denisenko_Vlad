<?php

namespace Myhomework\Myproject\Classes;

use Myhomework\Myproject\Classes\Interfaces\PaymentInterface;

class PayPal implements PaymentInterface
{
    public function pay($amount)
    {
        $message = "Олачуємо. Ваш запит:" . " " . $amount . "$" . PHP_EOL;
        echo $message;
    }
}