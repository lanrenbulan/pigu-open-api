<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Authentication;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class LoginRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';

    protected function beforeBuildRequest(): void
    {
        $this->headers['Content-Type'] = 'application/json';
        $this->bodyParams['username'] = $this->context->getUsername();
        $this->bodyParams['password'] = $this->context->getPassword();
    }

    protected function getApiPath(): string
    {
        return '/v3/login';
    }
}