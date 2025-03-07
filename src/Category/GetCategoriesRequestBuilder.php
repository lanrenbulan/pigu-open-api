<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Category;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetCategoriesRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/v3/categories';
    }
}