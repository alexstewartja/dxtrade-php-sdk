<?php

namespace AlexStewartJa\DXtrade;

use AlexStewartJa\DXtrade\Exceptions\DXtradeApiException;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Resources\AdministrativeResource;
use AlexStewartJa\DXtrade\Resources\TradingResource;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Psr\Http\Client\ClientExceptionInterface;

class DXtradeClient
{
    private GuzzleAdapter $httpClient;

    private ?string $sessionToken = null;

    private ?string $baseUrl;

    private array $headers;

    private array $clientOptions = [];

    public function __construct(
        ?string $baseUrl = Env::BASE_URL_DEMO,
        ?string $sessionToken = null,
        ?array $guzzleOptions = []
    ) {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        $this->setSessionToken($sessionToken, false);
        $this->initializeHttpClient($guzzleOptions);
    }

    public function initializeHttpClient(?array $guzzleOptions = []): void
    {
        $this->httpClient = GuzzleAdapter::createWithConfig($this->buildHttpClientConfig($guzzleOptions));
    }

    private function setSessionToken(?string $sessionToken = null, ?bool $reinitializeClient = true): void
    {
        $this->sessionToken = $sessionToken;

        if ($this->sessionToken === null) {
            unset($this->headers['Authorization']);
        } else {
            $this->headers['Authorization'] = "DXAPI {$this->sessionToken}";
        }

        if ($reinitializeClient) {
            $this->initializeHttpClient();
        }
    }

    private function buildHttpClientConfig(?array $guzzleOptions = []): ?array
    {
        $this->clientOptions = array_merge($this->clientOptions, [
            'base_url' => $this->baseUrl,
            RequestOptions::HEADERS => $this->headers,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::TIMEOUT => 30,
        ], $guzzleOptions);

        return $this->clientOptions;
    }

    /**
     * Send a request to the DXtrade API
     *
     * @param  string  $method  HTTP method
     * @param  string  $endpoint  API endpoint
     * @param  array  $params  Request parameters
     * @return array|string Response data
     *
     * @throws DXtradeException
     * @throws DXtradeApiException
     */
    public function request(string $method, string $endpoint, array $params = [], array $headers = []): array|string
    {
        $options = [];
        $method = strtoupper($method);

        if ($method === 'GET') {
            $options[RequestOptions::QUERY] = $params;
        } else {
            if (($headers['Content-Type'] ?? null) === 'application/x-www-form-urlencoded') {
                $options[RequestOptions::FORM_PARAMS] = $params;
            } else {
                $options[RequestOptions::JSON] = $params;
            }
        }

        try {
            $response = $this->httpClient->sendRequest(new Request($method, $endpoint, $headers, $options));
            $statusCode = $response->getStatusCode();
            $responseHeaders = $response->getHeaders();
            $responseBody = $response->getBody()->getContents();

            if (($headers['Accept'] ?? null) === 'text/plain' && $statusCode < 400) {
                return $responseBody;
            }

            $data = json_decode($responseBody, true);

            if ($statusCode >= 400) {
                throw new DXtradeApiException($statusCode, $data);
            }

            if (isset($responseHeaders['ETag'])) {
                $data['eTag'] = $responseHeaders['ETag'];
            }

            return $data;
        } catch (GuzzleException|ClientExceptionInterface $exception) {
            throw new DXtradeException('HTTP request failed: '.
                $exception->getMessage(), $exception->getCode());
        }
    }

    public function trading(): TradingResource
    {
        return new TradingResource($this);
    }

    public function administrative(): AdministrativeResource
    {
        return new AdministrativeResource($this);
    }
}
