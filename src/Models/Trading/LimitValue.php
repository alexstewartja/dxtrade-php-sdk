<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\LimitType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class LimitValue
{
    use Arrayable;

    /**
     * Value
     */
    private ?float $value = null;

    /**
     * Limit type
     *
     * @see LimitType
     */
    private ?string $limitType = null;

    /**
     * Get value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Set value.
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get limit type.
     *
     * @see LimitType
     */
    public function getLimitType(): ?string
    {
        return $this->limitType;
    }

    /**
     * Set limit type.
     *
     * @see LimitType
     */
    public function setLimitType(?string $limitType): self
    {
        $this->limitType = $limitType;

        return $this;
    }
}
