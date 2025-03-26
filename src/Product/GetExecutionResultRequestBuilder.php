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

    public function setLimit(int $limit)
    {
        $this->queryParams['limit'] = $limit;
    }

    public function setOffset(int $offset)
    {
        $this->queryParams['offset'] = $offset;
    }
  
    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/%d/product/import/execution/%s/results', $this->context->getSellerId(), $this->executionId);
    }
}
