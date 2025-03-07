<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class ConfirmOrderRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
 
    protected string $method = 'POST';

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/confirm', $this->orderId);
    }
}