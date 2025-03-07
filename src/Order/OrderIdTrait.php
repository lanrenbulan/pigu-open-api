<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

trait OrderIdTrait
{
    private int $orderId;
    
    public function setOrderId(int $orderId)
    {
        $this->orderId = $orderId;
    }
}