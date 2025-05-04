<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\Client;
use AlexStewartJa\DXtrade\Models\Administrative\ClientGroup;
use AlexStewartJa\DXtrade\Models\Administrative\ClientUpdate;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Resources\SubResource;

class UsersResource extends SubResource
{
    /**
     * Retrieve user info
     *
     * @param  string  $domain  User domain
     * @param  string  $login  User login
     * @param  string|null  $attributes  Requested attributes
     *
     * @throws DXtradeException
     */
    public function getUser(string $domain, string $login, ?string $attributes): Client|ErrorDescription
    {
        $query = ($attributes !== null) ? ['attributes' => $attributes] : [];

        $response = $this->request(
            'get',
            "/api/register/client/{$domain}/{$login}",
            $query
        );

        return is_array($response) ? new Client($response) : $response;
    }

    /**
     * Update user
     *
     * @param  string  $domain  User domain
     * @param  string  $login  User login
     * @param  ClientUpdate  $clientUpdate  Client update model
     * @param  string|null  $ifMatch  If-Match header
     *
     * @throws DXtradeException
     */
    public function updateUser(
        string $domain,
        string $login,
        ClientUpdate $clientUpdate,
        ?string $ifMatch = null
    ): Client|ErrorDescription {
        $headers = ($ifMatch !== null) ? ['If-Match' => $ifMatch] : [];

        $response = $this->request(
            'put',
            "/api/register/client/{$domain}/{$login}",
            $clientUpdate->toArray(),
            $headers
        );

        return is_array($response) ? new Client($response) : $response;
    }

    /**
     * Create a new user, optionally with account(s)
     *
     * @param  Client  $client  Client model
     *
     * @throws DXtradeException
     */
    public function createUser(Client $client): Client|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/api/register/client',
            $client->toArray()
        );

        return is_array($response) ? new Client($response) : $response;
    }

    /**
     * Retrieve users info
     *
     * @param  string|null  $attributes  Requested attributes
     * @return Client[]|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function getUsers(?string $attributes = null): array|ErrorDescription
    {
        $query = ($attributes !== null) ? ['attributes' => $attributes] : [];

        $response = $this->request('get', '/api/register/client', $query);

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var Client[] $users */
        $users = [];
        foreach ($response as $user) {
            $users[] = new Client($user);
        }

        return $users;
    }

    /**
     * Add user to user group
     *
     * @param  string  $domain  User domain
     * @param  string  $login  User login
     * @param  string  $groupDomain  User group domain
     * @param  string  $groupName  User group name
     * @param  string  $ifMatch  If-Match header obtained as `ETag` from the `create user` or `get user` requests to
     *                           avoid races with concurrent updates.
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function addUserToGroup(string $domain, string $login, string $groupDomain, string $groupName, string $ifMatch): bool|ErrorDescription
    {
        $response = $this->request(
            'post',
            "/api/register/client/{$domain}/{$login}/group/{$groupDomain}/{$groupName}",
            [],
            ['If-Match' => $ifMatch]
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Remove user from user group
     *
     * @param  string  $domain  User domain
     * @param  string  $login  User login
     * @param  string  $groupDomain  User group domain
     * @param  string  $groupName  User group name
     * @param  string  $ifMatch  If-Match header obtained as `ETag` from the `create user` or `get user` requests to
     *                           avoid races with concurrent updates.
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function removeUserFromGroup(string $domain, string $login, string $groupDomain, string $groupName, string $ifMatch): bool|ErrorDescription
    {
        $response = $this->request(
            'delete',
            "/api/register/client/{$domain}/{$login}/group/{$groupDomain}/{$groupName}",
            [],
            ['If-Match' => $ifMatch]
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Retrieve user group info
     *
     * @param  string  $domain  User group domain
     * @param  string  $name  User group name
     *
     * @throws DXtradeException
     */
    public function getUserGroup(string $domain, string $name): ClientGroup|ErrorDescription
    {
        $response = $this->request(
            'get',
            "/api/register/client/group/{$domain}/{$name}"
        );

        return is_array($response) ? new ClientGroup($response) : $response;
    }

    /**
     * Retrieve user groups info
     *
     * @return ClientGroup[]|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function getUserGroups(): array|ErrorDescription
    {
        $response = $this->request('get', '/api/register/client/group');

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var ClientGroup[] $groups */
        $groups = [];
        foreach ($response as $group) {
            $groups[] = new ClientGroup($group);
        }

        return $groups;
    }
}
