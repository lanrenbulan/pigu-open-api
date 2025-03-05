<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Category;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class GetCategoriesRequestBuilder extends AbstractRequestBuilder
{
    protected function getApiPath(): string
    {
        return '/v3/categories';
    }
}