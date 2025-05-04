<?php

namespace AlexStewartJa\DXtrade\Resources\Trading;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Trading\ApiError;
use AlexStewartJa\DXtrade\Models\Trading\ConversionRates;
use AlexStewartJa\DXtrade\Resources\SubResource;

class ConversionResource extends SubResource
{
    /**
     * Returns the conversion rate from one currency to another
     *
     * @param  string  $toCurrency  The target currency
     * @param  string|null  $fromCurrency  From currency, if omitted, returns an array of conversion rates from any currency to given currency
     *
     * @throws DXtradeException
     */
    public function getConversionRate(string $toCurrency, ?string $fromCurrency = null): ConversionRates|ApiError
    {
        $query = ['toCurrency' => $toCurrency];

        if ($fromCurrency !== null) {
            $query['fromCurrency'] = $fromCurrency;
        }

        $response = $this->request('get', '/conversionRates', $query);

        return is_array($response) ? new ConversionRates($response) : $response;
    }
}
