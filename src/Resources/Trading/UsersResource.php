<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\UserDetailsList;
use AlexStewartJa\DXtrade\Resources\SubResource;

class UsersResource extends SubResource
{
    /**
     * Retrieve user details by specified parameters
     *
     * @param  int|null  $limit  Maximum number of users to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an user in the result set to output data
     *
     * @throws DXtradeException
     */
    public function getUsers(?int $limit = null, ?int $startFrom = null): UserDetailsList|ApiError
    {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }

        $response = $this->request('get', '/users', $query);

        return is_array($response) ? new UserDetailsList($response) : $response;
    }

    /**
     * Retrieve user details for specified user name
     *
     * @param  string  $username  Full username in the format `username@domain`
     * @param  int|null  $limit  Maximum number of users to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an user in the result set to output data
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getUserByUsername(
        string $username,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ifNoneMatch = null
    ): UserDetailsList|ApiError {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/users/{$username}", $query, $headers);

        return is_array($response) ? new UserDetailsList($response) : $response;
    }
}
