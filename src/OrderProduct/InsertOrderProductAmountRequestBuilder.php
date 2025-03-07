<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\OrderProduct;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

/**
 * Insert data of available product amount
 * 
 * Order status must be one of ['submitted', 'confirmed', 'confirmed_later']
 */
class InsertOrderProductAmountRequestBuilder extends AbstractRequestBuilder
{
    private int $orderProductId;

    protected string $method = 'POST';

    public function setOrderProductId(int $orderProductId): self
    {
        $this->orderProductId = $orderProductId;
    }

    public function setAmountNow(int $amountNow): self
    {
        $this->bodyParams['amount_now'] = $amountNow;
    }

    protected function getApiPath(): string
    {
        return sprintf('​/v3​/order-products​/%d​/amounts', $this->orderProductId);
    }
}