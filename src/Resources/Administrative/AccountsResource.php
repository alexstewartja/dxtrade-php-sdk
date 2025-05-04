<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\Account;
use AlexStewartJa\DXtrade\Models\Administrative\AccountUpdate;
use AlexStewartJa\DXtrade\Models\Administrative\BulkAccountUpdate;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Resources\SubResource;

class AccountsResource extends SubResource
{
    /**
     * Register a new account belonging to an existing user in the system.
     *
     * @param  string  $domain  domain of the user who will own the account (e.g. `default`)
     * @param  string  $login  login of the user who will own the account (e.g. `test_1`)
     * @param  Account  $account  Account model
     *
     * @throws DXtradeException
     */
    public function createAccount(string $domain, string $login, Account $account): Account|ErrorDescription
    {
        $response = $this->request(
            'post',
            "/api/register/client/{$domain}/{$login}/account",
            $account->toArray()
        );

        return is_array($response) ? new Account($response) : $response;
    }

    /**
     * Register a new account without an owner in the system. The new account will not belong to any particular user.
     * Such accounts can be used for bookkeeping, trading via APIs etc.
     * All the Offset accounts (where all the trading activities with liquidity providers) is aggregated should be
     * free-standing.
     *
     * @param  Account  $account  Account model
     *
     * @throws DXtradeException
     */
    public function createFreeStandingAccount(Account $account): Account|ErrorDescription
    {
        $response = $this->request(
            'post',
            '/api/register/account',
            $account->toArray()
        );

        return is_array($response) ? new Account($response) : $response;
    }

    /**
     * Retrieve account info
     *
     * @param  string  $clearingCode  Account clearing code
     * @param  string  $accountCode  Account code
     * @param  string|null  $attributes  Requested attributes
     *
     * @throws DXtradeException
     */
    public function getAccount(string $clearingCode, string $accountCode, ?string $attributes = null): Account|ErrorDescription
    {
        $query = ($attributes !== null) ? ['attributes' => $attributes] : [];

        $response = $this->request(
            'get',
            "/api/register/account/{$clearingCode}/{$accountCode}",
            $query
        );

        return is_array($response) ? new Account($response) : $response;
    }

    /**
     * List the details on accounts with the ability to filter accounts by `type` or `status`
     *
     * @param  string|null  $type  filter by the type of the account
     * @param  string|null  $status  filter by the account status
     * @param  string|null  $attributes  Requested attributes
     * @return Account[]|ErrorDescription
     *
     * @throws DXtradeException
     *
     * @see AccountType
     * @see AccountStatus
     */
    public function getAccounts(?string $type = null, ?string $status = null, ?string $attributes = null): array|ErrorDescription
    {
        $query = [];
        if ($type !== null) {
            $query['type'] = $type;
        }
        if ($status !== null) {
            $query['status'] = $status;
        }
        if ($attributes !== null) {
            $query['attributes'] = $attributes;
        }

        $response = $this->request('get', '/api/register/account', $query);

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var Account[] $accounts */
        $accounts = [];
        foreach ($response as $account) {
            $accounts[] = new Account($account);
        }

        return $accounts;
    }

    /**
     * Update account
     *
     * @param  string  $clearingCode  Account clearing code
     * @param  string  $accountCode  Account code
     * @param  AccountUpdate  $accountUpdate  Account update model
     *
     * @throws DXtradeException
     */
    public function updateAccount(string $clearingCode, string $accountCode, AccountUpdate $accountUpdate): Account|ErrorDescription
    {
        $response = $this->request(
            'put',
            "/api/register/account/{$clearingCode}/{$accountCode}",
            $accountUpdate->toArray()
        );

        return is_array($response) ? new Account($response) : $response;
    }

    /**
     * Update list of accounts
     *
     * @param  BulkAccountUpdate[]  $accounts  List of account models
     * @return Account[]|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function updateAccounts(array $accounts): array|ErrorDescription
    {
        $response = $this->request(
            'put',
            '/api/register/account',
            array_map(fn ($account) => $account->toArray(), $accounts)
        );

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var Account[] $updatedAccounts */
        $updatedAccounts = [];
        foreach ($response as $account) {
            $updatedAccounts[] = new Account($account);
        }

        return $updatedAccounts;
    }
}
