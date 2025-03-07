<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\OrderDelivery;

use Doubler\PiguOpenApi\AbstractRequestBuilder;
use Doubler\PiguOpenApi\Order\OrderIdTrait;

class GetOrderParcelLabelsRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/deliveries/labels', $this->orderId);
    }
}