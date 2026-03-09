<?php

namespace App\Controllers;

use App\Services\DiscountService;
use App\Models\Order;

class OrderController
{
    private DiscountService $discountService;

    public function __construct(DiscountService $discountService)
    {
        $this->discountService = $discountService;
    }

    public function calculateDiscount(float $amount, string $customerType): int
    {
        $order = new Order($amount, $customerType);

        return $this->discountService->calculate($order);
    }
}