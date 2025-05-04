<?php

namespace AlexStewartJa\DXtrade\Helpers;

class ResourceHelper
{
    /**
     * Build common resource query parameters
     */
    public static function buildResourceQueryParams(
        ?string $accounts = null,
        ?int $limit = null,
        ?int $startFrom = null,
        ?string $ofType = null,
        ?string $ofStatus = null,
        ?string $timeFrom = null,
        ?string $timeTo = null,
        ?string $period = null,
        ?bool $includeOffset = null
    ): array {
        $query = [];
        if ($accounts !== null) {
            $query['accounts'] = $accounts;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($startFrom !== null) {
            $query['start-from'] = $startFrom;
        }
        if ($ofType !== null) {
            $query['of-type'] = $ofType;
        }
        if ($ofStatus !== null) {
            $query['of-status'] = $ofStatus;
        }
        if ($timeFrom !== null) {
            $query['time-from'] = $timeFrom;
        }
        if ($timeTo !== null) {
            $query['time-to'] = $timeTo;
        }
        if ($period !== null) {
            $query['period'] = $period;
        }
        if ($includeOffset !== null) {
            $query['include-offset'] = $includeOffset;
        }

        return $query;
    }

    public static function buildResourceHistoryQueryParams(
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
        ?bool $includeOffset = null): array
    {
        $query = [];
        if ($accounts !== null) {
            $query['accounts'] = $accounts;
        }
        if ($limit !== null) {
            $query['limit'] = $limit;
        }
        if ($page !== null) {
            $query['page'] = $page;
        }
        if ($pageSize !== null) {
            $query['page-size'] = $pageSize;
        }
        if ($inStatus !== null) {
            $query['in-status'] = $inStatus;
        }
        if ($ofType !== null) {
            $query['of-type'] = $ofType;
        }
        if ($issuedFrom !== null) {
            $query['issued-from'] = $issuedFrom;
        }
        if ($issuedTo !== null) {
            $query['issued-to'] = $issuedTo;
        }
        if ($period !== null) {
            $query['period'] = $period;
        }
        if ($completedFrom !== null) {
            $query['completed-from'] = $completedFrom;
        }
        if ($completedTo !== null) {
            $query['completed-to'] = $completedTo;
        }
        if ($atLeastVersion !== null) {
            $query['at-least-version'] = $atLeastVersion;
        }
        if ($atMostVersion !== null) {
            $query['at-most-version'] = $atMostVersion;
        }
        if ($side !== null) {
            $query['side'] = $side;
        }
        if ($withClientId !== null) {
            $query['with-client-id'] = $withClientId;
        }
        if ($withOrderId !== null) {
            $query['with-order-id'] = $withOrderId;
        }
        if ($forInstrument !== null) {
            $query['for-instrument'] = $forInstrument;
        }
        if ($transactionFrom !== null) {
            $query['transaction-from'] = $transactionFrom;
        }
        if ($transactionTo !== null) {
            $query['transaction-to'] = $transactionTo;
        }
        if ($includeOffset !== null) {
            $query['include-offset'] = $includeOffset;
        }

        return $query;
    }
}
