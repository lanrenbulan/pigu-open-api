<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Barcode;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetBarcodeRequestBuilder extends AbstractRequestBuilder
{
    public function setEan(string $ean): self
    {
        $this->queryParams['ean'] = $ean;
        
        return $this;
    }

    protected function getApiPath(): string
    {
        return '/v3/products/product-modifications/barcodes';
    }
}