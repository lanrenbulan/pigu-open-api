<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Seller;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetAuthenticatedSellerDetailsRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/v3/sellers/me';
    }
}