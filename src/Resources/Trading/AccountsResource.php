<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Helpers\ResourceHelper;
use AlexStewartJa\DXtrade\Models\Trading\AccountEventList;
use AlexStewartJa\DXtrade\Models\Trading\AccountMetricsList;
use AlexStewartJa\DXtrade\Models\Trading\AccountPortfolioList;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\CashTransferList;
use AlexStewartJa\DXtrade\Models\Trading\EodAccountMetricsList;
use AlexStewartJa\DXtrade\Models\Trading\PositionList;
use AlexStewartJa\DXtrade\Resources\SubResource;

class AccountsResource extends SubResource
{
    /**
     * Retrieve End-Of-Day (EOD) account metrics for specified date and accounts via GET request
     *
     * @param  string  $date  date
     * @param  string|null  $accounts  list of accounts codes to get metrics for, optional (either this or groups should be present)
     *
     * @throws DXtradeException
     */
    public function getEodMetricsQuery(string $date, ?string $accounts = null): EodAccountMetricsList|ApiError
    {
        $query = ($accounts !== null) ? ['accounts' => $accounts] : [];

        $response = $this->request('get', "/accounts/eodmetrics/{$date}", $query);

        return is_array($response) ? new EodAccountMetricsList($response) : $response;
    }

    /**
     * Retrieve End-Of-Day (EOD) account metrics for specified date and accounts via POST request
     *
     * @param  string  $date  date
     * @param  string|null  $accounts  list of accounts codes to get metrics for, optional (either this or groups should be present)
     *
     * @throws DXtradeException
     */
    public function getEodMetricsForm(string $date, ?string $accounts = null): EodAccountMetricsList|ApiError
    {
        $params = ($accounts !== null) ? ['accounts' => $accounts] : [];

        $response = $this->request('post', "/accounts/eodmetrics/{$date}", $params);

        return is_array($response) ? new EodAccountMetricsList($response) : $response;
    }

    /**
     * Retrieve account events by specified parameters
     *
     * @param  string|null  $accounts  accounts for which events are requested
     * @param  int|null  $limit  maximum number of events to be returned by the query
     * @param  int|null  $startFrom  paging starting index of an event in the result set to output data
     * @param  string|null  $ofType  filter for the event type (comma-separated)
     * @param  string|null  $timeFrom  from time filter for the event timestamp in UTC
     * @param  string|null  $timeTo  to time filter for the event timestamp in UTC
     * @param  string|null  $period  A shortcut filter for event timestamp. Possible values are: today, previous-day, week, previous-week
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getEvents(
        ?string $accounts = null,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ofType = null,
        ?string $timeFrom = null,
        ?string $timeTo = null,
        ?string $period = null,
        ?string $ifNoneMatch = null
    ): AccountEventList|ApiError {
        $query = ResourceHelper::buildResourceQueryParams($accounts, $limit, $startFrom, $ofType, $timeFrom, $timeTo, $period);
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', '/accounts/events', $query, $headers);

        return is_array($response) ? new AccountEventList($response) : $response;
    }

    /**
     * Retrieve account metrics for specified accounts
     *
     * @param  string|null  $accounts  accounts for which metrics are requested
     * @param  bool|null  $includePositions  if true, result will include individual per-position metrics
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     *
     * @throws DXtradeException
     */
    public function getMetrics(
        ?string $accounts = null,
        ?bool $includePositions = false,
        ?bool $includeOffset = false
    ): AccountMetricsList|ApiError {
        $query = [];
        if ($accounts !== null) {
            $query['accounts'] = $accounts;
        }
        if ($includePositions !== null) {
            $query['include-positions'] = $includePositions;
        }
        if ($includeOffset !== null) {
            $query['include-offset'] = $includeOffset;
        }

        $response = $this->request('get', '/accounts/metrics', $query);

        return is_array($response) ? new AccountMetricsList($response) : $response;
    }

    /**
     * Retrieve account portfolios for specified accounts
     *
     * @param  string|null  $accounts  accounts for which portfolios are requested
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getPortfolios(?string $accounts = null, ?bool $includeOffset = null, ?string $ifNoneMatch = null): AccountPortfolioList|ApiError
    {
        $query = [];
        if ($accounts !== null) {
            $query['accounts'] = $accounts;
        }
        if ($includeOffset !== null) {
            $query['include-offset'] = $includeOffset;
        }
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', '/accounts/portfolio', $query, $headers);

        return is_array($response) ? new AccountPortfolioList($response) : $response;
    }

    /**
     * Retrieve open positions for specified accounts
     *
     * @param  string|null  $accounts  accounts for which positions are requested
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getPositions(?string $accounts = null, ?bool $includeOffset = null, ?string $ifNoneMatch = null): PositionList|ApiError
    {
        $query = [];
        if ($accounts !== null) {
            $query['accounts'] = $accounts;
        }
        if ($includeOffset !== null) {
            $query['include-offset'] = $includeOffset;
        }
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', '/accounts/positions', $query, $headers);

        return is_array($response) ? new PositionList($response) : $response;
    }

    /**
     * Retrieve cash transfers by specified parameters
     *
     * @param  string|null  $accounts  accounts for which transfers are requested
     * @param  int|null  $limit  maximum number of transfers to be returned by the query
     * @param  int|null  $startFrom  paging starting index of an transfer in the result set to output data
     * @param  string|null  $ofType  filter for the transaction type (comma-separated)
     * @param  string|null  $timeFrom  from time filter for the transfer timestamp in UTC
     * @param  string|null  $timeTo  to time filter for the transfer timestamp in UTC
     * @param  string|null  $period  A shortcut filter for transfer timestamp. Possible values are: today, previous-day, week, previous-week
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getTransfers(
        ?string $accounts = null,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ofType = null,
        ?string $timeFrom = null,
        ?string $timeTo = null,
        ?string $period = null,
        ?bool $includeOffset = null,
        ?string $ifNoneMatch = null
    ): CashTransferList|ApiError {
        $query = ResourceHelper::buildResourceQueryParams($accounts, $limit, $startFrom, $ofType, $timeFrom, $timeTo, $period, $includeOffset);
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', '/accounts/transfers', $query, $headers);

        return is_array($response) ? new CashTransferList($response) : $response;
    }

    /**
     * Retrieve account events for required account by specified parameters
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  int|null  $limit  maximum number of events to be returned by the query
     * @param  int|null  $startFrom  paging starting index of an event in the result set to output data
     * @param  string|null  $ofType  filter for the event type (comma-separated)
     * @param  string|null  $timeFrom  from time filter for the event timestamp in UTC
     * @param  string|null  $timeTo  to time filter for the event timestamp in UTC
     * @param  string|null  $period  A shortcut filter for event timestamp. Possible values are: today, previous-day, week, previous-week
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getAccountEvents(
        string $account,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ofType = null,
        ?string $timeFrom = null,
        ?string $timeTo = null,
        ?string $period = null,
        ?string $ifNoneMatch = null
    ): AccountEventList|ApiError {
        $query = ResourceHelper::buildResourceQueryParams(null, $limit, $startFrom, $ofType, $timeFrom, $timeTo, $period);
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/accounts/{$account}/events", $query, $headers);

        return is_array($response) ? new AccountEventList($response) : $response;
    }

    /**
     * Retrieve account metrics for required account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  bool|null  $includePositions  if true, result will include individual per-position metrics
     *
     * @throws DXtradeException
     */
    public function getAccountMetrics(string $account, ?bool $includePositions = false): AccountMetricsList|ApiError
    {
        $query = ($includePositions !== null) ? ['include-positions' => $includePositions] : [];

        $response = $this->request('get', "/accounts/{$account}/metrics", $query);

        return is_array($response) ? new AccountMetricsList($response) : $response;
    }

    /**
     * Retrieve account portfolio for required account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getAccountPortfolios(string $account, ?string $ifNoneMatch = null): AccountPortfolioList|ApiError
    {
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/accounts/{$account}/portfolio", [], $headers);

        return is_array($response) ? new AccountPortfolioList($response) : $response;
    }

    /**
     * Retrieve open positions for required account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getAccountPositions(string $account, ?string $ifNoneMatch = null): PositionList|ApiError
    {
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/accounts/{$account}/positions", [], $headers);

        return is_array($response) ? new PositionList($response) : $response;
    }

    /**
     * Retrieve cash transfers for required account by specified parameters
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  int|null  $limit  maximum number of transfers to be returned by the query
     * @param  int|null  $startFrom  paging starting index of a transfer in the result set to output data
     * @param  string|null  $ofType  filter for the transaction type (comma-separated)
     * @param  string|null  $timeFrom  from time filter for the transfer timestamp in UTC
     * @param  string|null  $timeTo  to time filter for the transfer timestamp in UTC
     * @param  string|null  $period  A shortcut filter for transfer timestamp. Possible values are: today, previous-day, week, previous-week
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getAccountTransfers(
        string $account,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ofType = null,
        ?string $timeFrom = null,
        ?string $timeTo = null,
        ?string $period = null,
        ?string $ifNoneMatch = null
    ): CashTransferList|ApiError {
        $query = ResourceHelper::buildResourceQueryParams(null, $limit, $startFrom, $ofType, $timeFrom, $timeTo, $period);
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/accounts/{$account}/transfers", $query, $headers);

        return is_array($response) ? new CashTransferList($response) : $response;
    }
}
