<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Product;

use Doubler\PiguOpenApi\AbstractRequestBuilder;
use Doubler\PiguOpenApi\SellerIdTrait;

class UpdateProductRequestBuilder extends AbstractRequestBuilder
{
    use ProductTrait;

    protected string $method = 'PATCH';
}
