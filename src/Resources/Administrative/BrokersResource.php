<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\DemoBroker;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Resources\SubResource;

class BrokersResource extends SubResource
{
    /**
     * Retrieve broker info
     *
     * @param  string  $brokerCode  code of the broker
     * @param  string|null  $attributes  requested attributes
     *
     * @throws DXtradeException
     */
    public function getBroker(string $brokerCode, ?string $attributes = null): DemoBroker|ErrorDescription
    {
        $query = ($attributes !== null) ? ['attributes' => $attributes] : [];

        $response = $this->request(
            'get',
            "/api/register/broker/{$brokerCode}",
            $query
        );

        return is_array($response) ? new DemoBroker($response) : $response;
    }

    /**
     * Retrieve brokers info
     *
     * @param  string|null  $type  type of brokers
     * @param  string|null  $attributes  requested attributes
     * @return DemoBroker[]|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function getBrokers(?string $type = null, ?string $attributes = null): array|ErrorDescription
    {
        $query = [];
        if ($type !== null) {
            $query['type'] = $type;
        }
        if ($attributes !== null) {
            $query['attributes'] = $attributes;
        }

        $response = $this->request('get', '/api/register/broker', $query);

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var DemoBroker[] $brokers */
        $brokers = [];
        foreach ($response as $broker) {
            $brokers[] = new DemoBroker($broker);
        }

        return $brokers;
    }
}
