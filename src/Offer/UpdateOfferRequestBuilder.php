<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Offer;

use Doubler\PiguOpenApi\AbstractRequestBuilder;
use Doubler\PiguOpenApi\Context;

class UpdateOfferRequestBuilder extends AbstractRequestBuilder
{
    use OfferIdTrait;
  
    protected string $method = 'PATH';

    public function setDeliveryHours(int $deliveryHours): self
    {
        $this->bodyParams['delivery_hours'] = $deliveryHours;
        
        return $this;
    }

    public function setAmount(int $amount): self
    {
        $this->bodyParams['amount'] = $amount;
        
        return $this;
    }

    public function setSellPrice(float $sellPrice): self
    {
        $this->bodyParams['sell_price'] = $sellPrice;
        
        return $this;
    }

    public function setSellPriceAfterDiscount(float $sellPriceAfterDiscount): self
    {
        $this->bodyParams['sell_price_after_discount'] = $sellPriceAfterDiscount;
        
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->bodyParams['status'] = $status;
        
        return $this;
    }
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/offers/' . $this->offerId);
    }
}
