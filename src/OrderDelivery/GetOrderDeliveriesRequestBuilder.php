<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\OrderDelivery;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;
use Doubler\PiGuOpenApi\Order\OrderIdTrait;

class GetOrderDeliveriesRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/deliveries', $this->orderId);
    }
}