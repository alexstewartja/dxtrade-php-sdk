<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarketEvent
{
    use Arrayable;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Type
     */
    private ?string $type = null;

    /**
     * Get symbol.
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * Set symbol.
     */
    public function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
