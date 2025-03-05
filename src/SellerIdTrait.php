<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi;

class SellerIdTrait
{
    private int $sellerId;
    
    public function setSellerId(int $sellerId)
    {
        $this->sellerId = $sellerId;
    }
}