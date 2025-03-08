<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi;

trait SellerIdTrait
{
    private int $sellerId;
    
    public function setSellerId(int $sellerId)
    {
        $this->sellerId = $sellerId;
    }
}