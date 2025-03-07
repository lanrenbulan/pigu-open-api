<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi;

use InvalidArgumentException;

class Context
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getUsername(): string
    {
        return $this->config['username'];
    }

    public function getPassword(): string
    {
        return $this->config['password'];
    }

    public function getToken(): string
    {
        return $this->config['token'];
    }

    public function getGatewayUri(): string
    {
        if (!isset($this->config['gateway_uri'])) {
            throw new InvalidArgumentException('Gateway uri is required.');
        }

        return $this->config['gateway_uri'];
    }
}