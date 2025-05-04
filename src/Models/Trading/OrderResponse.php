<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderResponse
{
    use Arrayable;

    /**
     * Order ID
     */
    private ?int $orderId = null;

    /**
     * Update order ID
     */
    private ?int $updateOrderId = null;

    /**
     * Get order ID.
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * Set order ID.
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get update order ID.
     */
    public function getUpdateOrderId(): ?int
    {
        return $this->updateOrderId;
    }

    /**
     * Set update order ID.
     */
    public function setUpdateOrderId(?int $updateOrderId): self
    {
        $this->updateOrderId = $updateOrderId;

        return $this;
    }
}
