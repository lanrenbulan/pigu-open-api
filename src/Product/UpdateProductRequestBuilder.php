<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Product;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class UpdateProductRequestBuilder extends AbstractRequestBuilder
{
    use ProductTrait;

    protected string $method = 'PATCH';
}
