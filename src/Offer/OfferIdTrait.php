<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

trait OfferIdTrait
{
    private int $offerId;
    
    public function setOrderId(int $offerId)
    {
        $this->offerId = $offerId;
    }
}
