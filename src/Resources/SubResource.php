<?php

namespace AlexStewartJa\DXtrade\Resources;

use AlexStewartJa\DXtrade\DXtradeClient;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;

abstract class SubResource
{
    protected Resource $superResource;

    public function __construct(Resource $superResource)
    {
        $this->superResource = $superResource;
    }

    protected function getClient(): DXtradeClient
    {
        return $this->superResource->client;
    }

    /**
     * Send a request to the DXtrade API
     *
     * @param  string  $method  HTTP method
     * @param  string  $endpoint  API endpoint
     * @param  array  $params  Request parameters
     * @return mixed Response data or error object
     *
     * @throws DXtradeException
     */
    protected function request(string $method, string $endpoint, array $params = [], array $headers = []): mixed
    {
        return $this->superResource->request($method, $endpoint, $params, $headers);
    }
}
