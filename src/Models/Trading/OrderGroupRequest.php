<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\ContingencyType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderGroupRequest
{
    use Arrayable;

    /**
     * List of orders in a group
     *
     * @var SingleOrderRequest[]
     */
    private array $orders;

    /**
     * Relations between orders in a group
     *
     * @see ContingencyType
     */
    private string $contingencyType;

    /**
     * Get list of orders in a group.
     *
     * @return SingleOrderRequest[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * Set list of orders in a group.
     *
     * @param  SingleOrderRequest[]  $orders
     */
    public function setOrders(array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get relations between orders in a group.
     *
     * @see ContingencyType
     */
    public function getContingencyType(): string
    {
        return $this->contingencyType;
    }

    /**
     * Set relations between orders in a group.
     *
     * @see ContingencyType
     */
    public function setContingencyType(string $contingencyType): self
    {
        $this->contingencyType = $contingencyType;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'orders' => SingleOrderRequest::class,
        ];
    }
}
