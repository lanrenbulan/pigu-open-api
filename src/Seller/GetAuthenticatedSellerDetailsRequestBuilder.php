<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Seller;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class GetAuthenticatedSellerDetailsRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/v3/sellers/me';
    }
}