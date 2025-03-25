<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class RejectOrderRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
 
    protected string $method = 'POST';

    public function setRejectReason(string $rejectReason): self
    {
        $this->bodyParams['reject_reason'] = $rejectReason;
        
        return $this;
    }

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/reject', $this->orderId);
    }
}
