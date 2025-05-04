<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Models\Administrative\LoginRequest;
use AlexStewartJa\DXtrade\Models\Administrative\LoginResult;
use AlexStewartJa\DXtrade\Resources\SubResource;

class AuthenticationResource extends SubResource
{
    /**
     * Check user's credentials using GET method
     *
     * @param  string  $login  User login
     * @param  string  $domain  User domain
     * @param  string|null  $token  SSO token
     * @param  string|null  $password  User's password
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function checkLoginQuery(
        string $login,
        string $domain,
        ?string $token = null,
        ?string $password = null
    ): bool|ErrorDescription {
        $query = [
            'login' => $login,
            'domain' => $domain,
        ];

        if ($token !== null) {
            $query['token'] = $token;
        }
        if ($password !== null) {
            $query['password'] = $password;
        }

        $response = $this->request('get', '/checkLogin', $query);

        return is_array($response) ? true : $response;
    }

    /**
     * Check user's credentials using POST method
     *
     * @param  string  $login  User login
     * @param  string  $domain  User domain
     * @param  string|null  $token  SSO token
     * @param  string|null  $password  User's password
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function checkLoginForm(
        string $login,
        string $domain,
        ?string $token = null,
        ?string $password = null
    ): bool|ErrorDescription {
        $params = [
            'login' => $login,
            'domain' => $domain,
        ];

        if ($token !== null) {
            $params['token'] = $token;
        }
        if ($password !== null) {
            $params['password'] = $password;
        }

        $response = $this->request(
            'post',
            '/checkLogin',
            $params,
            ['Content-Type' => 'application/x-www-form-urlencoded']
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Login and generate a token
     *
     * @param  LoginRequest  $loginRequest  Login request model
     *
     * @throws DXtradeException
     */
    public function login(LoginRequest $loginRequest): LoginResult|ErrorDescription
    {
        $response = $this->request('post', '/login', $loginRequest->toArray());

        return is_array($response) ? new LoginResult($response) : $response;
    }

    /**
     * Terminate all active sessions for a user by user ID
     *
     * @param  int  $userId  User ID
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function logoutUserById(int $userId): bool|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/logoutUserById',
            ['userId' => $userId],
            [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'text/plain',
            ]
        );

        return is_string($response) ? true : $response;
    }

    /**
     * Terminate all active sessions for a user by a previously issued session token
     *
     * @param  string  $login  User's login
     * @param  string  $domain  User's domain
     * @param  string  $token  Session token
     *
     * @throws DXtradeException
     */
    public function logoutUserByToken(string $login, string $domain, string $token): bool|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/logoutUserByToken',
            [
                'login' => $login,
                'domain' => $domain,
                'token' => $token,
            ],
            [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'text/plain',
            ]
        );

        return is_string($response) ? true : $response;
    }

    /**
     * Terminate all active sessions for a user by a login and domain
     *
     * @param  string  $login  User login
     * @param  string  $domain  User domain
     *
     * @throws DXtradeException
     */
    public function logoutUserByLogin(string $login, string $domain): bool|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/logoutUserByLogin',
            [
                'login' => $login,
                'domain' => $domain,
            ],
            [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'text/plain',
            ]
        );

        return is_string($response) ? true : $response;
    }
}
