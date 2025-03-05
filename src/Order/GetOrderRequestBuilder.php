<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Order;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class GetOrderRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d', $this->orderId);
    }
}