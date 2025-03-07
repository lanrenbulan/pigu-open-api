<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

class OrderIdTrait
{
    private int $orderId;
    
    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
    }
}