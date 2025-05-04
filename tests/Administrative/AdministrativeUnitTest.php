<?php

use AlexStewartJa\DXtrade\DXtradeClient;
use AlexStewartJa\DXtrade\Env;
use AlexStewartJa\DXtrade\Exceptions\DXtradeApiException;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Resources\Administrative\AccountsResource;
use AlexStewartJa\DXtrade\Resources\Administrative\AuthenticationResource;
use AlexStewartJa\DXtrade\Resources\Administrative\BrokersResource;
use AlexStewartJa\DXtrade\Resources\Administrative\CashTransfersResource;
use AlexStewartJa\DXtrade\Resources\Administrative\CategoriesResource;
use AlexStewartJa\DXtrade\Resources\Administrative\UsersResource;
use AlexStewartJa\DXtrade\Resources\AdministrativeResource;

test('administrative resource has correct base path', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->getBasePath())->toBe(Env::BASE_PATH_ADMINISTRATIVE);
});

test('administrative resource has correct API error class', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->getApiErrorClass())->toBe(ErrorDescription::class);
});

test('administrative resource returns the client', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->getClient())->toBe($client);
});

test('administrative resource returns authentication subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->authentication())->toBeInstanceOf(AuthenticationResource::class);
});

test('administrative resource returns accounts subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->accounts())->toBeInstanceOf(AccountsResource::class);
});

test('administrative resource returns brokers subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->brokers())->toBeInstanceOf(BrokersResource::class);
});

test('administrative resource returns cash transfers subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->cashTransfers())->toBeInstanceOf(CashTransfersResource::class);
});

test('administrative resource returns categories subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->categories())->toBeInstanceOf(CategoriesResource::class);
});

test('administrative resource returns users subresource', function () {
    $client = new DXtradeClient;

    expect($client->administrative()->users())->toBeInstanceOf(UsersResource::class);
});

test('administrative resource request method delegates to client', function () {
    $client = Mockery::mock(DXtradeClient::class);
    $client->shouldReceive('request')
        ->once()
        ->with('get', '/test-endpoint', ['query' => 'value'], ['header' => 'value'])
        ->andReturn(['result' => 'success']);

    $administrativeResource = new AdministrativeResource($client);
    $result = $administrativeResource->request(
        'get',
        '/test-endpoint',
        ['query' => 'value'],
        ['header' => 'value']
    );

    expect($result)->toBe(['result' => 'success']);
});

test('administrative resource handles API errors', function () {
    $client = Mockery::mock(DXtradeClient::class);
    $client->shouldReceive('request')
        ->once()
        ->andThrow(new DXtradeApiException(400,
            [
                'errorCode' => '10001',
                'errorMessage' => 'Invalid request',
                'errorId' => '1234567890',
            ]
        ));

    $administrativeResource = new AdministrativeResource($client);
    $result = $administrativeResource->request('get', '/test-endpoint');

    expect($result)->toBeInstanceOf(ErrorDescription::class);
});

test('administrative resource can set custom base path', function () {
    $client = new DXtradeClient;
    $resource = $client->administrative()->withBasePath('/custom/path');

    expect($resource->getBasePath())->toBe('/custom/path');
});
