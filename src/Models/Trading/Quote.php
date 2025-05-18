<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Quote
{
    use Arrayable;

    /**
     * Always `Quote`
     */
    private ?string $type = null;

    /**
     * Unique instrument symbol
     */
    private ?string $symbol = null;

    /**
     * Bid price of the quote
     */
    private ?float $bid = null;

    /**
     * Ask price of the quote
     */
    private ?float $ask = null;

    /**
     * Bid timestamp in UTC
     */
    private ?DXtradeDateTime $time = null;

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
     * Get bid price.
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * Set bid price.
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get ask price.
     */
    public function getAsk(): ?float
    {
        return $this->ask;
    }

    /**
     * Set ask price.
     */
    public function setAsk(?float $ask): self
    {
        $this->ask = $ask;

        return $this;
    }

    /**
     * Get bid timestamp in UTC.
     */
    public function getTime(): ?DXtradeDateTime
    {
        return $this->time;
    }

    /**
     * Set bid timestamp in UTC.
     */
    public function setTime(?DXtradeDateTime $time): self
    {
        $this->time = $time;

        return $this;
    }
}
