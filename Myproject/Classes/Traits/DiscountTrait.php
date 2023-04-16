<?php

namespace Myhomework\Myproject\Classes\Traits;
trait DiscountTrait
{
    public function applyDiscount($discount)
    {
        return $this->price - ($this->price * $discount / 100);
    }
}