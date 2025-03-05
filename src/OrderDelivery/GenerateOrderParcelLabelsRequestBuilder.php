<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\OrderDelivery;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;
use Doubler\PiGuOpenApi\Order\OrderIdTrait;

class GenerateOrderParcelLabelsRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;

    protected string $method = 'POST';

    public function setLabelQuantity(int $labelQuantity): self
    {
        $this->bodyParams['label_quantity'] = $labelQuantity;

        return $this;
    }

    /**
     * 
     */
    public function setReceiver(array $receiver): self
    {
        $this->bodyParams['receiver'] = $receiver;

        return $this;
    }

    public function setShipment(array $shipment): self
    {
        $this->bodyParams['shipment'] = $shipment;

        return $this;
    }

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/deliveries/labels', $this->orderId);
    }
}