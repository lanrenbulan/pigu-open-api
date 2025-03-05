<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\OrderDelivery;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class CreateOrderDeliveryRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';

    public function setCourierId(int $courierId): self
    {
        $this->bodyParams['courier_id'] = $courierId;

        return $this;
    }

    public function setShipmentNumber(string $shipmentNumber): self
    {
        $this->bodyParams['shipment_number'] = $shipmentNumber;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/v3/order-deliveries';
    }
}