<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Offer;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetOfferRequestBuilder extends AbstractRequestBuilder
{
    use OfferIdTrait;
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/offers/%d', $this->offerId);
    }
}
