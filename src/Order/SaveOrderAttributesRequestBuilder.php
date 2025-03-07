<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class SaveOrderAttributesRequestBuilder extends AbstractRequestBuilder
{
    use OrderIdTrait;
 
    protected string $method = 'PATCH';
    
    public function setAttributes(array $attributes)
    {
        $this->setBodyParams($attributes);
    }

    public function setAttribute(string $name, string $value)
    {
        $this->bodyParams[] = [
            'name' => $name,
            'value' => $value
        ];
    }

    protected function getApiPath(): string
    {
        return sprintf('/v3/orders/%d/save-attributes', $this->orderId);
    }
}