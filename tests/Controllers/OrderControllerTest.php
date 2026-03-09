<?php

use PHPUnit\Framework\TestCase;
use App\Controllers\OrderController;
use App\Services\DiscountService;

class OrderControllerTest extends TestCase
{
    public function testControllerReturnsDiscount()
    {
        $service = new DiscountService();

        $controller = new OrderController($service);

        $discount = $controller->calculateDiscount(200, "premium");

        $this->assertEquals(10, $discount);
    }
}