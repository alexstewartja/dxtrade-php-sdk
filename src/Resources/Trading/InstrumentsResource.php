<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Enums\InstrumentType;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\InstrumentDetailsList;
use AlexStewartJa\DXtrade\Models\Trading\InstrumentList;
use AlexStewartJa\DXtrade\Resources\SubResource;

class InstrumentsResource extends SubResource
{
    /**
     * Retrieve instruments by specified types and symbols
     *
     * @param  string|null  $symbols  Symbol(or its part) to filter instruments (comma-separated values)
     * @param  string|null  $types  Filter for the types of instruments (comma-separated)
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     * @param  string|null  $sortByAsc  Sort-by-asc specifies sorting in ascending direction (comma-separated values)
     * @param  string|null  $sortByDesc  Sort-by-desc specifies sorting in descending direction (comma-separated values)
     *
     * @throws DXtradeException
     */
    public function getBySymbolsAndTypes(
        ?string $symbols = null,
        ?string $types = null,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $sortByAsc = null,
        ?string $sortByDesc = null
    ): InstrumentList|ApiError {
        $query = [];
        if ($symbols !== null) {
            $query['symbols'] = $symbols;
        }
        if ($types !== null) {
            $query['types'] = $types;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }
        if ($sortByAsc !== null) {
            $query['sort-by-asc'] = $sortByAsc;
        }
        if ($sortByDesc !== null) {
            $query['sort-by-desc'] = $sortByDesc;
        }

        $response = $this->request('get', '/instruments/query', $query);

        return is_array($response) ? new InstrumentList($response) : $response;
    }

    /**
     * Retrieve instruments by required type
     *
     * @param  string  $type  Type of the instrument in the system
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     * @param  string|null  $sortByAsc  Sort-by-asc specifies sorting in ascending direction (comma-separated values)
     * @param  string|null  $sortByDesc  Sort-by-desc specifies sorting in descending direction (comma-separated values)
     *
     * @see InstrumentType
     *
     * @throws DXtradeException
     */
    public function getByType(
        string $type,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $sortByAsc = null,
        ?string $sortByDesc = null
    ): InstrumentList|ApiError {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }
        if ($sortByAsc !== null) {
            $query['sort-by-asc'] = $sortByAsc;
        }
        if ($sortByDesc !== null) {
            $query['sort-by-desc'] = $sortByDesc;
        }

        $response = $this->request('get', "/instruments/type/{$type}", $query);

        return is_array($response) ? new InstrumentList($response) : $response;
    }

    /**
     * Retrieve instrument by required symbol
     *
     * @param  string  $symbol  Unique instrument symbol in the system
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     * @param  string|null  $sortByAsc  Sort-by-asc specifies sorting in ascending direction (comma-separated values)
     * @param  string|null  $sortByDesc  Sort-by-desc specifies sorting in descending direction (comma-separated values)
     *
     * @throws DXtradeException
     */
    public function getBySymbol(
        string $symbol,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $sortByAsc = null,
        ?string $sortByDesc = null
    ): InstrumentList|ApiError {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }
        if ($sortByAsc !== null) {
            $query['sort-by-asc'] = $sortByAsc;
        }
        if ($sortByDesc !== null) {
            $query['sort-by-desc'] = $sortByDesc;
        }

        $response = $this->request('get', "/instruments/{$symbol}", $query);

        return is_array($response) ? new InstrumentList($response) : $response;
    }

    /**
     * Retrieve account instruments by specified types and symbols
     *
     * @param  string  $account  Unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string|null  $symbols  Symbol(or its part) to filter instruments (comma-separated values)
     * @param  string|null  $types  Filter for the types of instruments (comma-separated)
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     *
     * @throws DXtradeException
     */
    public function getAccountInstrumentsBySymbolsAndTypes(
        string $account,
        ?string $symbols = null,
        ?string $types = null,
        ?int $limit = null,
        ?int $startFrom = null
    ): InstrumentDetailsList|ApiError {
        $query = [];
        if ($symbols !== null) {
            $query['symbols'] = $symbols;
        }
        if ($types !== null) {
            $query['types'] = $types;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }

        $response = $this->request('get', "/accounts/{$account}/instruments/query", $query);

        return is_array($response) ? new InstrumentDetailsList($response) : $response;
    }

    /**
     * Retrieve account instruments by required type
     *
     * @param  string  $account  Unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string  $type  Type of the instrument in the system
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     *
     * @throws DXtradeException
     */
    public function getAccountInstrumentsByType(
        string $account,
        string $type,
        ?int $limit = null,
        ?int $startFrom = null
    ): InstrumentDetailsList|ApiError {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }

        $response = $this->request('get', "/accounts/{$account}/instruments/type/{$type}", $query);

        return is_array($response) ? new InstrumentDetailsList($response) : $response;
    }

    /**
     * Retrieve account instrument by required symbol
     *
     * @param  string  $account  Unique code assigned to an account in the format `clearing_code:account_code`
     * @param  string  $symbol  Unique instrument symbol in the system
     * @param  int|null  $limit  Maximum number of instruments to be returned by the query
     * @param  int|null  $startFrom  Paging starting index of an instrument in the result set to output data
     *
     * @throws DXtradeException
     */
    public function getAccountInstrumentBySymbol(
        string $account,
        string $symbol,
        ?int $limit = null,
        ?int $startFrom = null
    ): InstrumentDetailsList|ApiError {
        $query = [];
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }

        $response = $this->request('get', "/accounts/{$account}/instruments/{$symbol}", $query);

        return is_array($response) ? new InstrumentDetailsList($response) : $response;
    }
}
