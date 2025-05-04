<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderLinkType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderLink
{
    use Arrayable;

    /**
     * Link type
     *
     * @see OrderLinkType
     */
    private ?string $linkType = null;

    /**
     * Linked order
     */
    private ?string $linkedOrder = null;

    /**
     * Linked client order ID
     */
    private ?string $linkedClientOrderId = null;

    /**
     * Get link type.
     *
     * @see OrderLinkType
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * Set link type.
     *
     * @see OrderLinkType
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;

        return $this;
    }

    /**
     * Get linked order.
     */
    public function getLinkedOrder(): ?string
    {
        return $this->linkedOrder;
    }

    /**
     * Set linked order.
     */
    public function setLinkedOrder(?string $linkedOrder): self
    {
        $this->linkedOrder = $linkedOrder;

        return $this;
    }

    /**
     * Get linked client order ID.
     */
    public function getLinkedClientOrderId(): ?string
    {
        return $this->linkedClientOrderId;
    }

    /**
     * Set linked client order ID.
     */
    public function setLinkedClientOrderId(?string $linkedClientOrderId): self
    {
        $this->linkedClientOrderId = $linkedClientOrderId;

        return $this;
    }
}
