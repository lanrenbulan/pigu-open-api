<?php

declare(strict_types=1);

namespace Doubler\PiGuOpenApi;

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
        if (!isset($this->config['username'])) {
            throw new InvalidArgumentException('Username is required.');
        }

        return $this->config['username'];
    }

    public function getPassword(): string
    {
        if (!isset($this->config['password'])) {
            throw new InvalidArgumentException('Password is required.');
        }

        return $this->config['password'];
    }

    public function getGatewayUri(): string
    {
        if (!isset($this->config['gateway_uri'])) {
            throw new InvalidArgumentException('Gateway uri is required.');
        }

        return $this->config['gateway_uri'];
    }
}