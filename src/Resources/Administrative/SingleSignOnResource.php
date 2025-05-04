<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Models\Administrative\SSOTokenInfo;
use AlexStewartJa\DXtrade\Models\Administrative\TokenRequest;
use AlexStewartJa\DXtrade\Resources\SubResource;

class SingleSignOnResource extends SubResource
{
    /**
     * Get information about a previously issued SSO token
     *
     * @param  string  $token  previously issued SSO token
     *
     * @throws DXtradeException
     */
    public function getSSOTokenInfo(string $token): SSOTokenInfo|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/getSSOTokenInfo',
            ['token' => $token],
            ['Content-Type' => 'application/x-www-form-urlencoded']
        );

        return is_array($response) ? new SSOTokenInfo($response) : $response;
    }

    /**
     * HTTP POST request for token generation by given dxCore session
     *
     * @param  TokenRequest  $tokenRequest  token request model
     *
     * @throws DXtradeException
     */
    public function generateTokenForSession(TokenRequest $tokenRequest): SSOTokenInfo|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/getSSOToken',
            $tokenRequest->toArray()
        );

        return is_array($response) ? new SSOTokenInfo($response) : $response;
    }

    /**
     * Generate a new SSO token for a given user (via GET request)
     *
     * @param  string  $login  User's login
     * @param  string  $domain  User's domain
     *
     * @throws DXtradeException
     */
    public function generateTokenQuery(string $login, string $domain): SSOTokenInfo|ErrorDescription
    {
        $response = $this->request(
            'get',
            '/generateToken',
            [
                'login' => $login,
                'domain' => $domain,
            ]
        );

        return is_array($response) ? new SSOTokenInfo($response) : $response;
    }

    /**
     * Generate a new SSO token for a given user (via POST request)
     *
     * @param  string  $login  User's login
     * @param  string  $domain  User's domain
     *
     * @throws DXtradeException
     */
    public function generateTokenForm(string $login, string $domain): SSOTokenInfo|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/generateToken',
            [
                'login' => $login,
                'domain' => $domain,
            ],
            ['Content-Type' => 'application/x-www-form-urlencoded']
        );

        return is_array($response) ? new SSOTokenInfo($response) : $response;
    }
}
