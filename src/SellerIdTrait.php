<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi;

class SellerIdTrait
{
    private int $sellerId;
    
    public function setSellerId(int $sellerId)
    {
        $this->sellerId = $sellerId;
    }
}