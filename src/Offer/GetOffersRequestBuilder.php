<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Offer;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetOffersRequestBuilder extends AbstractRequestBuilder
{
    public function setAfter(int $after): self
    {
        $this->queryParams['after'] = $after;

        return $this;
    }

    public function setLimit(int $limit): self
    {
        $this->queryParams['limit'] = $limit;
        
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->queryParams['status'] = $status;
        
        return $this;
    }

    public function setAmountFrom(int $amountFrom): self
    {
        $this->queryParams['amount_from'] = $amountFrom;
        
        return $this;
    }

    public function setAmountTo(int $amountTo): self
    {
        $this->queryParams['amount_to'] = $amountTo;
        
        return $this;
    }

    public function setPriceFrom(int $priceFrom): self
    {
        $this->queryParams['price_from'] = $priceFrom;
        
        return $this;
    }

    public function setPriceTo(int $priceTo): self
    {
        $this->queryParams['price_to'] = $priceTo;
        
        return $this;
    }

    public function setPiguExternalIds(array $piguExternalIds): self
    {
        $this->queryParams['pigu_external_ids'] = $piguExternalIds;

        return $this;
    }

    public function setCreatedAtFrom(string $createdAtFrom): self
    {
        $this->queryParams['created_at_from'] = $createdAtFrom;
        
        return $this;
    }
    
    public function setCreatedAtTo(string $createdAtTo): self
    {
        $this->queryParams['created_at_to'] = $createdAtTo;
        
        return $this;
    }

    public function setUpdatedAtFrom(string $updatedAtFrom): self
    {
        $this->queryParams['updated_at_from'] = $updatedAtFrom;
        
        return $this;
    }

        public function setUpdatedAtTo(string $updatedAtTo): self
    {
        $this->queryParams['updated_at_to'] = $updatedAtTo;
        
        return $this;
    }

    public function setHasInvalidPrice(bool $hasInvalidPrice): self
    {
        $this->queryParams['has_invalid_price'] = $hasInvalidPrice ? 'true' : 'false';
        
        return $this;
    }

    public function setHasInsultPrice(bool $hasInsultPrice): self
    {
        $this->queryParams['has_insult_price'] = $hasInsultPrice ? 'true' : 'false';
        
        return $this;
    }
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/%s/offers', $this->context->getSellerId());
    }
}
