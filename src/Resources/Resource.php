<?php

namespace AlexStewartJa\DXtrade\Resources;

use AlexStewartJa\DXtrade\DXtradeClient;
use AlexStewartJa\DXtrade\Exceptions\DXtradeApiException;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;

abstract class Resource
{
    public DXtradeClient $client;

    protected string $basePath;

    protected string $apiErrorClass;

    public function __construct(DXtradeClient $client)
    {
        $this->client = $client;
    }

    public function getClient(): DXtradeClient
    {
        return $this->client;
    }

    public function getBasePath(): string
    {
        return $this->basePath;
    }

    public function withBasePath(string $basePath): self
    {
        $this->basePath = $basePath;

        return $this;
    }

    public function getApiErrorClass(): string
    {
        return $this->apiErrorClass;
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
    public function request(string $method, string $endpoint, array $params = [], array $headers = []): mixed
    {
        try {
            return $this->client->request($method, $endpoint, $params, $headers);
        } catch (DXtradeApiException $exception) {
            return new $this->apiErrorClass($exception->getResponseData());
        }
    }
}
