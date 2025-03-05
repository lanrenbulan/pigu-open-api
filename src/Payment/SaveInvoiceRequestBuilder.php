<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Payment;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class SaveInvoiceRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): self
    {
        $this->bodyParams['order_id'] = $orderId;

        return $this;
    }

    /**
     * @param string $data Base64 encoded pdf file
     */
    public function setData(string $data): self
    {
        $this->bodyParams['data'] = $data;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/v3/invoices';
    }
}