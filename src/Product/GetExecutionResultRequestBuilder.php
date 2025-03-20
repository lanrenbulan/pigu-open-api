<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Product;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetExecutionResultRequestBuilder extends AbstractRequestBuilder
{  
    private int $executionId;

    public function setExecutionId(int $executionId)
    {
        $this->executionId = $executionId;
    }
  
    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/{sellerId}/product/import/execution/%s/results', $this->executionId);
    }
}
