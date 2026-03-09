<?php

namespace App\Models;

class Order
{
    public float $amount;
    public string $customerType;

    public function __construct(float $amount, string $customerType)
    {
        $this->amount = $amount;
        $this->customerType = $customerType;
    }
}