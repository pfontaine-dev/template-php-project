<?php

use PHPUnit\Framework\TestCase;
use App\Services\DiscountService;
use App\Models\Order;

class DiscountServiceTest extends TestCase
{
    public function testPremiumDiscount()
    {
        $order = new Order(200, "premium");

        $service = new DiscountService();
        $discount = $service->calculate($order);

        $this->assertEquals(10, $discount);
    }

    public function testVipDiscount()
    {
        $order = new Order(200, "vip");

        $service = new DiscountService();
        $discount = $service->calculate($order);

        $this->assertEquals(20, $discount);
    }

    public function testHighAmountExtraDiscount()
    {
        $order = new Order(1500, "premium");

        $service = new DiscountService();
        $discount = $service->calculate($order);

        $this->assertEquals(15, $discount);
    }
}