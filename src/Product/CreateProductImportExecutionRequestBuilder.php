<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Product;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;
use Doubler\PiGuOpenApi\SellerIdTrait;

class CreateProductImportExecutionRequestBuilder extends AbstractRequestBuilder
{
    use SellerIdTrait;

    protected string $method = 'POST';

    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/%d/product/import/execution', $this->sellerId);
    }
}