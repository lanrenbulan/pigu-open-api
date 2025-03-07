<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\OrderDelivery;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetCouriersRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/v3/couriers';
    }
}