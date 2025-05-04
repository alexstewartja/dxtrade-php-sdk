<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderList
{
    use Arrayable;

    /**
     * Orders
     *
     * @var Order[]|null
     */
    private ?array $orders = null;

    /**
     * Next page transaction time
     */
    private ?DXtradeDateTime $nextPageTransactionTime = null;

    /**
     * Get orders.
     *
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * Set orders.
     *
     * @param  Order[]|null  $orders
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get next page transaction time.
     */
    public function getNextPageTransactionTime(): ?DXtradeDateTime
    {
        return $this->nextPageTransactionTime;
    }

    /**
     * Set next page transaction time.
     */
    public function setNextPageTransactionTime(?DXtradeDateTime $nextPageTransactionTime): self
    {
        $this->nextPageTransactionTime = $nextPageTransactionTime;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'orders' => Order::class,
        ];
    }
}
