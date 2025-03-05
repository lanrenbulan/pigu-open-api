<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Order;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class RejectOrderRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
 
    protected string $method = 'POST';

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/reject', $this->orderId);
    }
}