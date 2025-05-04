<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Enums\ContingencyType;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Helpers\ResourceHelper;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\OrderGroupRequest;
use AlexStewartJa\DXtrade\Models\Trading\OrderList;
use AlexStewartJa\DXtrade\Models\Trading\OrderResponse;
use AlexStewartJa\DXtrade\Models\Trading\OrderResponseList;
use AlexStewartJa\DXtrade\Models\Trading\SingleOrderRequest;
use AlexStewartJa\DXtrade\Resources\SubResource;

class OrdersResource extends SubResource
{
    /**
     * Retrieve open orders for specified accounts
     *
     * @param  string|null  $accounts  comma-separated list of account codes
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getOpenOrders(
        ?string $accounts = null,
        ?bool $includeOffset = null,
        ?string $ifNoneMatch = null
    ): OrderList|ApiError {
        $query = ResourceHelper::buildResourceQueryParams($accounts, includeOffset: $includeOffset);
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', '/accounts/orders', $query, $headers);

        return is_array($response) ? new OrderList($response) : $response;
    }

    /**
     * Retrieve orders by specified parameters
     *
     * @param  string|null  $accounts  comma-separated list of account codes
     * @param  int|null  $limit  maximum number of orders to be returned by the query
     * @param  int|null  $page  number of pages which allow loading orders by batches
     * @param  int|null  $pageSize  size of page
     * @param  string|null  $inStatus  allows specifying filter for order statuses (comma-separated list)
     * @param  string|null  $ofType  allows specifying filter for order types (comma-separated list)
     * @param  string|null  $issuedFrom  from time filter for the order issue timestamp in UTC
     * @param  string|null  $issuedTo  to time filter for the order issue timestamp in UTC
     * @param  string|null  $period  a shortcut filter for order issue timestamp
     * @param  string|null  $completedFrom  from time filter for the order completion timestamp in UTC
     * @param  string|null  $completedTo  to time filter for the order completion timestamp in UTC
     * @param  int|null  $atLeastVersion  filter for the account version related to the last order update (specified version or greater)
     * @param  int|null  $atMostVersion  filter for the account version related to the last order update (specified version or smaller)
     * @param  string|null  $side  filter for order operation (buy or sell)
     * @param  string|null  $withClientId  filter for the order unique ids assigned by client (comma-separated list)
     * @param  string|null  $withOrderId  filter for the order unique ids assigned by server (comma-separated list)
     * @param  string|null  $forInstrument  filter for the order instrument (comma-separated list of symbols)
     * @param  string|null  $transactionFrom  from time filter for the order (last modification timestamp in UTC)
     * @param  string|null  $transactionTo  to time filter for the order (last modification timestamp in UTC)
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     *
     * @throws DXtradeException
     */
    public function getOrdersHistoryQuery(
        ?string $accounts = null,
        ?int $limit = null,
        ?int $page = null,
        ?int $pageSize = null,
        ?string $inStatus = null,
        ?string $ofType = null,
        ?string $issuedFrom = null,
        ?string $issuedTo = null,
        ?string $period = null,
        ?string $completedFrom = null,
        ?string $completedTo = null,
        ?int $atLeastVersion = null,
        ?int $atMostVersion = null,
        ?string $side = null,
        ?string $withClientId = null,
        ?string $withOrderId = null,
        ?string $forInstrument = null,
        ?string $transactionFrom = null,
        ?string $transactionTo = null,
        ?bool $includeOffset = null
    ): OrderList|ApiError {
        $query = ResourceHelper::buildResourceHistoryQueryParams(
            $accounts, $limit, $page, $pageSize, $inStatus, $ofType, $issuedFrom, $issuedTo, $period, $completedFrom,
            $completedTo, $atLeastVersion, $atMostVersion, $side, $withClientId, $withOrderId, $forInstrument,
            $transactionFrom, $transactionTo, $includeOffset);

        $response = $this->request('get', '/accounts/orders/history', $query);

        return is_array($response) ? new OrderList($response) : $response;
    }

    /**
     * Retrieve orders by specified parameters (POST method)
     *
     * @param  string|null  $accounts  comma-separated list of account codes
     * @param  int|null  $limit  maximum number of orders to be returned by the query
     * @param  int|null  $page  number of pages which allow loading orders by batches
     * @param  int|null  $pageSize  size of page
     * @param  string|null  $inStatus  allows specifying filter for order statuses (comma-separated list)
     * @param  string|null  $ofType  allows specifying filter for order types (comma-separated list)
     * @param  string|null  $issuedFrom  from time filter for the order issue timestamp in UTC
     * @param  string|null  $issuedTo  to time filter for the order issue timestamp in UTC
     * @param  string|null  $period  a shortcut filter for order issue timestamp
     * @param  string|null  $completedFrom  from time filter for the order completion timestamp in UTC
     * @param  string|null  $completedTo  to time filter for the order completion timestamp in UTC
     * @param  int|null  $atLeastVersion  filter for the account version related to the last order update (specified version or greater)
     * @param  int|null  $atMostVersion  filter for the account version related to the last order update (specified version or smaller)
     * @param  string|null  $side  filter for order operation (buy or sell)
     * @param  string|null  $withClientId  filter for the order unique ids assigned by client (comma-separated list)
     * @param  string|null  $withOrderId  filter for the order unique ids assigned by server (comma-separated list)
     * @param  string|null  $forInstrument  filter for the order instrument (comma-separated list of symbols)
     * @param  string|null  $transactionFrom  from time filter for the order last modification timestamp in UTC
     * @param  string|null  $transactionTo  to time filter for the order last modification timestamp in UTC
     * @param  bool|null  $includeOffset  include offset accounts if no accounts are specified
     *
     * @throws DXtradeException
     */
    public function getOrdersHistoryForm(
        ?string $accounts = null,
        ?int $limit = null,
        ?int $page = null,
        ?int $pageSize = null,
        ?string $inStatus = null,
        ?string $ofType = null,
        ?string $issuedFrom = null,
        ?string $issuedTo = null,
        ?string $period = null,
        ?string $completedFrom = null,
        ?string $completedTo = null,
        ?int $atLeastVersion = null,
        ?int $atMostVersion = null,
        ?string $side = null,
        ?string $withClientId = null,
        ?string $withOrderId = null,
        ?string $forInstrument = null,
        ?string $transactionFrom = null,
        ?string $transactionTo = null,
        ?bool $includeOffset = null
    ): OrderList|ApiError {
        $params = ResourceHelper::buildResourceHistoryQueryParams($accounts, $limit, $page, $pageSize, $inStatus,
            $ofType, $issuedFrom, $issuedTo, $period, $completedFrom, $completedTo, $atLeastVersion, $atMostVersion,
            $side, $withClientId, $withOrderId, $forInstrument, $transactionFrom, $transactionTo, $includeOffset);

        $response = $this->request('post', '/accounts/orders/history', $params);

        return is_array($response) ? new OrderList($response) : $response;
    }

    /**
     * Retrieve open orders for specified account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string|null  $ifNoneMatch  If-None-Match header
     *
     * @throws DXtradeException
     */
    public function getAccountOrders(
        string $account,
        ?string $ifNoneMatch = null
    ): OrderList|ApiError {
        $headers = ($ifNoneMatch !== null) ? ['If-None-Match' => $ifNoneMatch] : [];

        $response = $this->request('get', "/accounts/{$account}/orders", [], $headers);

        return is_array($response) ? new OrderList($response) : $response;
    }

    /**
     * Places an order or a group of orders on an account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  SingleOrderRequest|OrderGroupRequest  $orderRequest  order request data
     *
     * @throws DXtradeException
     */
    public function createOrder(
        string $account,
        SingleOrderRequest|OrderGroupRequest $orderRequest
    ): OrderResponse|OrderResponseList|ApiError {
        $response = $this->request('post', "/accounts/{$account}/orders", $orderRequest->toArray());

        if ($response instanceof ApiError) {
            return $response;
        }

        if (isset($response['orderResponses'])) {
            return new OrderResponseList($response);
        }

        return new OrderResponse($response);
    }

    /**
     * Edit order details on an account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  SingleOrderRequest|OrderGroupRequest  $orderRequest  order request data
     *
     * @throws DXtradeException
     */
    public function editOrder(
        string $account,
        SingleOrderRequest|OrderGroupRequest $orderRequest
    ): OrderResponse|OrderResponseList|ApiError {
        $response = $this->request('put', "/accounts/{$account}/orders", $orderRequest->toArray());

        if ($response instanceof ApiError) {
            return $response;
        }

        if (isset($response['orderResponses'])) {
            return new OrderResponseList($response);
        }

        return new OrderResponse($response);
    }

    /**
     * Cancel an existing order on an account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string  $orderCode  order code can be either a client order id or an internal code assigned by the system
     *
     * @throws DXtradeException
     */
    public function cancelOrder(string $account, string $orderCode): OrderResponse|ApiError
    {
        $response = $this->request('delete', "/accounts/{$account}/orders/{$orderCode}");

        return is_array($response) ? new OrderResponse($response) : $response;
    }

    /**
     * Cancel order group on an account
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string|null  $orderCodes  comma-separated list of order codes to cancel
     * @param  string|ContingencyType|null  $contingencyType  contingency type
     *
     * @throws DXtradeException
     *
     * @see ContingencyType
     */
    public function cancelOrderGroup(
        string $account,
        ?string $orderCodes = null,
        string|ContingencyType|null $contingencyType = null
    ): OrderResponseList|ApiError {
        $query = [];
        if ($orderCodes !== null) {
            $query['order-codes'] = $orderCodes;
        }
        if ($contingencyType !== null) {
            $query['contingency-type'] =
                (is_a($contingencyType, ContingencyType::class) ? $contingencyType->value : $contingencyType);
        }

        $response = $this->request('delete', "/accounts/{$account}/orders/group", $query);

        return is_array($response) ? new OrderResponseList($response) : $response;
    }

    /**
     * Retrieve orders for required account, filtered by specified parameters
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  int|null  $limit  maximum number of orders to be returned by the query
     * @param  int|null  $page  number of pages which allow loading orders by batches
     * @param  int|null  $pageSize  size of page
     * @param  string|null  $inStatus  allows specifying filter for order statuses (comma-separated list)
     * @param  string|null  $ofType  allows specifying filter for order types (comma-separated list)
     * @param  string|null  $issuedFrom  from time filter for the order issue timestamp in UTC
     * @param  string|null  $issuedTo  to time filter for the order issue timestamp in UTC
     * @param  string|null  $period  a shortcut filter for order issue timestamp
     * @param  string|null  $completedFrom  from time filter for the order completion timestamp in UTC
     * @param  string|null  $completedTo  to time filter for the order completion timestamp in UTC
     * @param  int|null  $atLeastVersion  filter for the account version related to the last order update (specified version or greater)
     * @param  int|null  $atMostVersion  filter for the account version related to the last order update (specified version or smaller)
     * @param  string|null  $side  filter for order operation (buy or sell)
     * @param  string|null  $withClientId  filter for the order unique ids assigned by client (comma-separated list)
     * @param  string|null  $withOrderId  filter for the order unique ids assigned by server (comma-separated list)
     * @param  string|null  $forInstrument  filter for the order instrument (comma-separated list of symbols)
     * @param  string|null  $transactionFrom  from time filter for the order last modification timestamp in UTC
     * @param  string|null  $transactionTo  to time filter for the order last modification timestamp in UTC
     *
     * @throws DXtradeException
     */
    public function getAccountOrderHistoryQuery(
        string $account,
        ?int $limit = null,
        ?int $page = null,
        ?int $pageSize = null,
        ?string $inStatus = null,
        ?string $ofType = null,
        ?string $issuedFrom = null,
        ?string $issuedTo = null,
        ?string $period = null,
        ?string $completedFrom = null,
        ?string $completedTo = null,
        ?int $atLeastVersion = null,
        ?int $atMostVersion = null,
        ?string $side = null,
        ?string $withClientId = null,
        ?string $withOrderId = null,
        ?string $forInstrument = null,
        ?string $transactionFrom = null,
        ?string $transactionTo = null
    ): OrderList|ApiError {
        $query = ResourceHelper::buildResourceHistoryQueryParams(
            null, $limit, $page, $pageSize, $inStatus, $ofType, $issuedFrom, $issuedTo, $period,
            $completedFrom, $completedTo, $atLeastVersion, $atMostVersion, $side, $withClientId, $withOrderId,
            $forInstrument, $transactionFrom, $transactionTo);

        $response = $this->request('get', "/accounts/{$account}/orders/history", $query);

        return is_array($response) ? new OrderList($response) : $response;
    }

    /**
     * Retrieve orders for required account, filtered by specified parameters (via POST method)
     *
     * @param  string  $account  unique code assigned to an account in the format `clearing_code:account_code`
     * @param  int|null  $limit  maximum number of orders to be returned by the query
     * @param  int|null  $page  number of pages which allow loading orders by batches
     * @param  int|null  $pageSize  size of page
     * @param  string|null  $inStatus  allows specifying filter for order statuses (comma-separated list)
     * @param  string|null  $ofType  allows specifying filter for order types (comma-separated list)
     * @param  string|null  $issuedFrom  from time filter for the order issue timestamp in UTC
     * @param  string|null  $issuedTo  to time filter for the order issue timestamp in UTC
     * @param  string|null  $period  a shortcut filter for order issue timestamp
     * @param  string|null  $completedFrom  from time filter for the order completion timestamp in UTC
     * @param  string|null  $completedTo  to time filter for the order completion timestamp in UTC
     * @param  int|null  $atLeastVersion  filter for the account version related to the last order update (specified version or greater)
     * @param  int|null  $atMostVersion  filter for the account version related to the last order update (specified version or smaller)
     * @param  string|null  $side  filter for order operation (buy or sell)
     * @param  string|null  $withClientId  filter for the order unique ids assigned by client (comma-separated list)
     * @param  string|null  $withOrderId  filter for the order unique ids assigned by server (comma-separated list)
     * @param  string|null  $forInstrument  filter for the order instrument (comma-separated list of symbols)
     * @param  string|null  $transactionFrom  from time filter for the order last modification timestamp in UTC
     * @param  string|null  $transactionTo  to time filter for the order last modification timestamp in UTC
     *
     * @throws DXtradeException
     */
    public function getAccountOrderHistoryForm(
        string $account,
        ?int $limit = null,
        ?int $page = null,
        ?int $pageSize = null,
        ?string $inStatus = null,
        ?string $ofType = null,
        ?string $issuedFrom = null,
        ?string $issuedTo = null,
        ?string $period = null,
        ?string $completedFrom = null,
        ?string $completedTo = null,
        ?int $atLeastVersion = null,
        ?int $atMostVersion = null,
        ?string $side = null,
        ?string $withClientId = null,
        ?string $withOrderId = null,
        ?string $forInstrument = null,
        ?string $transactionFrom = null,
        ?string $transactionTo = null
    ): OrderList|ApiError {
        $params = ResourceHelper::buildResourceHistoryQueryParams(
            null, $limit, $page, $pageSize, $inStatus, $ofType, $issuedFrom, $issuedTo, $period,
            $completedFrom, $completedTo, $atLeastVersion, $atMostVersion, $side, $withClientId, $withOrderId,
            $forInstrument, $transactionFrom, $transactionTo);

        $response = $this->request('post', "/accounts/{$account}/orders/history", $params);

        return is_array($response) ? new OrderList($response) : $response;
    }
}
