<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\CandleType;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Candle
{
    use Arrayable;

    /**
     * Always `Candle`
     */
    private ?string $type = null;

    /**
     * Type of the candle
     *
     * @see CandleType
     */
    private ?string $candleType = null;

    /**
     * Unique instrument symbol
     */
    private ?string $symbol = null;

    /**
     * First (open) price of the candle
     */
    private ?float $open = null;

    /**
     * High price of the candle
     */
    private ?float $high = null;

    /**
     * Low price of the candle
     */
    private ?float $low = null;

    /**
     * Close price of the candle
     */
    private ?float $close = null;

    /**
     * Total volume in the candle
     */
    private ?float $volume = null;

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
     * Get candle type.
     *
     * @see CandleType
     */
    public function getCandleType(): ?string
    {
        return $this->candleType;
    }

    /**
     * Set candle type.
     *
     * @see CandleType
     */
    public function setCandleType(?string $candleType): self
    {
        $this->candleType = $candleType;

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
     * Get open price.
     */
    public function getOpen(): ?float
    {
        return $this->open;
    }

    /**
     * Set open price.
     */
    public function setOpen(?float $open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get high price.
     */
    public function getHigh(): ?float
    {
        return $this->high;
    }

    /**
     * Set high price.
     */
    public function setHigh(?float $high): self
    {
        $this->high = $high;

        return $this;
    }

    /**
     * Get low price.
     */
    public function getLow(): ?float
    {
        return $this->low;
    }

    /**
     * Set low price.
     */
    public function setLow(?float $low): self
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get close price.
     */
    public function getClose(): ?float
    {
        return $this->close;
    }

    /**
     * Set close price.
     */
    public function setClose(?float $close): self
    {
        $this->close = $close;

        return $this;
    }

    /**
     * Get volume.
     */
    public function getVolume(): ?float
    {
        return $this->volume;
    }

    /**
     * Set volume.
     */
    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

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
