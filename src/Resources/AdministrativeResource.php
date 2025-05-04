<?php

namespace AlexStewartJa\DXtrade\Resources;

use AlexStewartJa\DXtrade\Env;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Resources\Administrative\AccountsResource;
use AlexStewartJa\DXtrade\Resources\Administrative\AuthenticationResource;
use AlexStewartJa\DXtrade\Resources\Administrative\BrokersResource;
use AlexStewartJa\DXtrade\Resources\Administrative\CashTransfersResource;
use AlexStewartJa\DXtrade\Resources\Administrative\CategoriesResource;
use AlexStewartJa\DXtrade\Resources\Administrative\UsersResource;

class AdministrativeResource extends Resource
{
    protected string $basePath = Env::BASE_PATH_ADMINISTRATIVE;

    protected string $apiErrorClass = ErrorDescription::class;

    public function authentication(): AuthenticationResource
    {
        return new AuthenticationResource($this);
    }

    public function accounts(): AccountsResource
    {
        return new AccountsResource($this);
    }

    public function brokers(): BrokersResource
    {
        return new BrokersResource($this);
    }

    public function cashTransfers(): CashTransfersResource
    {
        return new CashTransfersResource($this);
    }

    public function categories(): CategoriesResource
    {
        return new CategoriesResource($this);
    }

    public function users(): UsersResource
    {
        return new UsersResource($this);
    }
}
