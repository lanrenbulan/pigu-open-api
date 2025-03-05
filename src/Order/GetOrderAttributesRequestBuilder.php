<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Order;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class GetOrderAttributesRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/attributes', $this->orderId);
    }
}