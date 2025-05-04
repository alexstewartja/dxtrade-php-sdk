<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class TraderSelectedMarginRates
{
    use Arrayable;

    /**
     * Minimum rate
     */
    private ?float $minRate = null;

    /**
     * Maximum rate
     */
    private ?float $maxRate = null;

    /**
     * Default value
     */
    private ?float $defaultValue = null;

    /**
     * Rate increment
     */
    private ?float $rateIncrement = null;

    /**
     * Get minimum rate.
     */
    public function getMinRate(): ?float
    {
        return $this->minRate;
    }

    /**
     * Set minimum rate.
     */
    public function setMinRate(?float $minRate): self
    {
        $this->minRate = $minRate;

        return $this;
    }

    /**
     * Get maximum rate.
     */
    public function getMaxRate(): ?float
    {
        return $this->maxRate;
    }

    /**
     * Set maximum rate.
     */
    public function setMaxRate(?float $maxRate): self
    {
        $this->maxRate = $maxRate;

        return $this;
    }

    /**
     * Get default value.
     */
    public function getDefaultValue(): ?float
    {
        return $this->defaultValue;
    }

    /**
     * Set default value.
     */
    public function setDefaultValue(?float $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get rate increment.
     */
    public function getRateIncrement(): ?float
    {
        return $this->rateIncrement;
    }

    /**
     * Set rate increment.
     */
    public function setRateIncrement(?float $rateIncrement): self
    {
        $this->rateIncrement = $rateIncrement;

        return $this;
    }
}
