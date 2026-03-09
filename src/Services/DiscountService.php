<?php

namespace App\Services;

use App\Models\Order;

class DiscountService
{
    public function calculate(Order $order): int
    {
        $discount = 0;

        if ($order->customerType === "premium") {
            $discount = 10;
        }

        if ($order->customerType === "vip") {
            $discount = 20;
        }

        if ($order->amount > 1000) {
            $discount += 5;
        }

        return min($discount, 30);
    }
}