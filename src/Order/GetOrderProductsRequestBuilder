<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetOrderProductsRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/products', $this->orderId);
    }
}