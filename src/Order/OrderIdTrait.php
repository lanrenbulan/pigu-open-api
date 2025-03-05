<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Order;

class OrderIdTrait
{
    private int $orderId;
    
    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
    }
}