<?php

namespace AlexStewartJa\DXtrade\Resources;

use AlexStewartJa\DXtrade\Env;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Resources\Trading\AccountsResource;
use AlexStewartJa\DXtrade\Resources\Trading\AuthenticationResource;
use AlexStewartJa\DXtrade\Resources\Trading\ConversionResource;
use AlexStewartJa\DXtrade\Resources\Trading\InstrumentsResource;
use AlexStewartJa\DXtrade\Resources\Trading\MarketDataResource;
use AlexStewartJa\DXtrade\Resources\Trading\OrdersResource;

class TradingResource extends Resource
{
    protected string $basePath = Env::BASE_PATH_TRADING;

    protected string $apiErrorClass = ApiError::class;

    public function authentication(): AuthenticationResource
    {
        return new AuthenticationResource($this);
    }

    public function accounts(): AccountsResource
    {
        return new AccountsResource($this);
    }

    public function conversion(): ConversionResource
    {
        return new ConversionResource($this);
    }

    public function instruments(): InstrumentsResource
    {
        return new InstrumentsResource($this);
    }

    public function marketData(): MarketDataResource
    {
        return new MarketDataResource($this);
    }

    public function orders(): OrdersResource
    {
        return new OrdersResource($this);
    }
}
