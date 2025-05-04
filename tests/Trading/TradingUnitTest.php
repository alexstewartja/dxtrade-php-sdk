<?php

use AlexStewartJa\DXtrade\DXtradeClient;
use AlexStewartJa\DXtrade\Env;
use AlexStewartJa\DXtrade\Exceptions\DXtradeApiException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Resources\Trading\AccountsResource;
use AlexStewartJa\DXtrade\Resources\Trading\AuthenticationResource;
use AlexStewartJa\DXtrade\Resources\Trading\ConversionResource;
use AlexStewartJa\DXtrade\Resources\Trading\InstrumentsResource;
use AlexStewartJa\DXtrade\Resources\Trading\MarketDataResource;
use AlexStewartJa\DXtrade\Resources\Trading\OrdersResource;
use AlexStewartJa\DXtrade\Resources\TradingResource;

test('trading resource has correct base path', function () {
    $client = new DXtradeClient;

    expect($client->trading()->getBasePath())->toBe(Env::BASE_PATH_TRADING);
});

test('trading resource has correct API error class', function () {
    $client = new DXtradeClient;

    expect($client->trading()->getApiErrorClass())->toBe(ApiError::class);
});

test('trading resource returns the client', function () {
    $client = new DXtradeClient;

    expect($client->trading()->getClient())->toBe($client);
});

test('trading resource returns authentication subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->authentication())->toBeInstanceOf(AuthenticationResource::class);
});

test('trading resource returns accounts subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->accounts())->toBeInstanceOf(AccountsResource::class);
});

test('trading resource returns conversion subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->conversion())->toBeInstanceOf(ConversionResource::class);
});

test('trading resource returns instruments subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->instruments())->toBeInstanceOf(InstrumentsResource::class);
});

test('trading resource returns market data subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->marketData())->toBeInstanceOf(MarketDataResource::class);
});

test('trading resource returns orders subresource', function () {
    $client = new DXtradeClient;

    expect($client->trading()->orders())->toBeInstanceOf(OrdersResource::class);
});

test('trading resource request method delegates to client', function () {
    $mockClient = Mockery::mock(DXtradeClient::class);
    $mockClient->shouldReceive('request')
        ->once()
        ->with('GET', '/test-endpoint', ['param' => 'value'], ['header' => 'value'])
        ->andReturn(['result' => 'success']);

    $tradingResource = new TradingResource($mockClient);
    $result = $tradingResource->request('GET',
        '/test-endpoint',
        ['param' => 'value'],
        ['header' => 'value']
    );

    expect($result)->toBe(['result' => 'success']);
});

test('trading resource handles API errors', function () {
    $mockClient = Mockery::mock(DXtradeClient::class);
    $mockClient->shouldReceive('request')
        ->once()
        ->andThrow(new DXtradeApiException(400, ['errorCode' => '10001', 'description' => 'Bad Request']));

    $tradingResource = new TradingResource($mockClient);
    $result = $tradingResource->request('GET', '/test-endpoint');

    expect($result)->toBeInstanceOf(ApiError::class);
});

test('trading resource can set custom base path', function () {
    $client = new DXtradeClient;
    $resource = $client->trading()->withBasePath('/custom/path');

    expect($resource->getBasePath())->toBe('/custom/path');
});
