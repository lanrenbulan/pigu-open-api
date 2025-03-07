<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\OrderDelivery;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class CompleteOrderDeliveryRequestBuilder extends AbstractRequestBuilder
{
    private int $orderDeliveryId;
 
    protected string $method = 'PATCH';

    public function setOrderDeliveryId(int $orderDeliveryId): self
    {
        $this->orderDeliveryId = $orderDeliveryId;

        return $this;
    }

    protected function getApiPath(): string
    {
        return sprintf('/v3/order-deliveries/%d/complete', $this->orderDeliveryId);
    }
}