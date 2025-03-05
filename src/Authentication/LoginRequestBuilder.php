<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi\Authorization;

use Doubler\PiGuOpenApi\AbstractRequestBuilder;

class LoginRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';

    /**
     * Set username
     * 
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username): self
    {
        $this->bodyParams['username'] = $username;

        return $this;
    }

    /**
     * Set password
     * 
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->bodyParams['password'] = $password;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/v3/login';
    }
}