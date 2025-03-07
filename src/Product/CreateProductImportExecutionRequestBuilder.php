<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Product;

use Doubler\PiguOpenApi\AbstractRequestBuilder;
use Doubler\PiguOpenApi\SellerIdTrait;

class CreateProductImportExecutionRequestBuilder extends AbstractRequestBuilder
{
    use SellerIdTrait;

    protected string $method = 'POST';

    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/%d/product/import/execution', $this->sellerId);
    }
}