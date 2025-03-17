<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

trait OfferIdTrait
{
    private int $offerId;
    
    public function setOfferId(int $offerId)
    {
        $this->offerId = $offerId;
    }
}
