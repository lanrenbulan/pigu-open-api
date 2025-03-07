<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi;

use Doubler\OpenApiSdk\RequestBuilderTrait;

class AbstractRequestBuilder
{
    use RequestBuilderTrait;

    protected Context $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    protected function getGatewayUri(): string
    {
        return $this->context->getGatewayUri();
    }

    protected function beforeBuildRequest(): void
    {
        $this->headers['Authorization'] = 'Pigu-mp ' . $this->context->getToken();
    }
}