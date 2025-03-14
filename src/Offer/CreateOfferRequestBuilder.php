<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Offer;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class CreateOfferRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';
  
    public function setSellerId(int $sellerId): self
    {
        $this->bodyParams['seller_id'] = $sellerId;

        return $this;
    }

    public function setAppName(int $appName): self
    {
        $this->bodyParams['app_name'] = $appName;
        
        return $this;
    }

    public function setSku(string $sku): self
    {
        $this->bodyParams['sku'] = $sku;
        
        return $this;
    }

    public function setEan(int $ean): self
    {
        $this->bodyParams['ean'] = $ean;
        
        return $this;
    }

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
        return sprintf('/v3/sellers/%s/offers', $this->context->getSellerId());
    }
}
