<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\LoginRequest;
use AlexStewartJa\DXtrade\Models\Trading\SessionToken;
use AlexStewartJa\DXtrade\Models\Trading\SsoTokenLoginRequest;
use AlexStewartJa\DXtrade\Resources\SubResource;

class AuthenticationResource extends SubResource
{
    /**
     * Performs a basic authentication login
     *
     * @param  LoginRequest  $loginRequest  login request with username, domain and password
     *
     * @throws DXtradeException
     */
    public function login(LoginRequest $loginRequest): SessionToken|ApiError
    {
        $response = $this->request('post', '/login', $loginRequest->toArray());

        return is_array($response) ? new SessionToken($response) : $response;
    }

    /**
     * Performs a login by a short-lived SSO token
     *
     * @param  SsoTokenLoginRequest  $ssoTokenLoginRequest  login request with username, domain and token
     *
     * @throws DXtradeException
     */
    public function loginByToken(SsoTokenLoginRequest $ssoTokenLoginRequest): SessionToken|ApiError
    {
        $response = $this->request('post', '/loginByToken', $ssoTokenLoginRequest->toArray());

        return is_array($response) ? new SessionToken($response) : $response;
    }

    /**
     * For clients authenticated with basic authentication explicitly expires authorization token
     *
     * @return true|ApiError
     *
     * @throws DXtradeException
     */
    public function logout(): bool|ApiError
    {
        $response = $this->request('post', '/logout');

        return is_a($response, ApiError::class) ? $response : true;
    }

    /**
     * For clients authenticated with basic authentication, resets the session expiration timeout.
     *
     * @throws DXtradeException
     */
    public function ping(): SessionToken|ApiError
    {
        $response = $this->request('post', '/ping');

        return is_array($response) ? new SessionToken($response) : $response;
    }
}
