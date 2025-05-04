<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderResponseList
{
    use Arrayable;

    /**
     * Order responses
     *
     * @var OrderResponse[]|null
     */
    private ?array $orderResponses = null;

    /**
     * Get order responses.
     *
     * @return OrderResponse[]|null
     */
    public function getOrderResponses(): ?array
    {
        return $this->orderResponses;
    }

    /**
     * Set order responses.
     *
     * @param  OrderResponse[]|null  $orderResponses
     */
    public function setOrderResponses(?array $orderResponses): self
    {
        $this->orderResponses = $orderResponses;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'orderResponses' => OrderResponse::class,
        ];
    }
}
