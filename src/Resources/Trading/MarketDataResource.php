<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\MarketDataList;
use AlexStewartJa\DXtrade\Models\Trading\MarketDataRequest;
use AlexStewartJa\DXtrade\Resources\SubResource;

class MarketDataResource extends SubResource
{
    /**
     * Retrieve the current or historical market data (Quotes or Chart Candles)
     *
     * @param  MarketDataRequest  $marketDataRequest  Market data request with symbols and event types
     *
     * @throws DXtradeException
     */
    public function getMarketData(MarketDataRequest $marketDataRequest): MarketDataList|ApiError
    {
        $response = $this->request('post', '/marketdata', $marketDataRequest->toArray());

        return is_array($response) ? new MarketDataList($response) : $response;
    }
}
