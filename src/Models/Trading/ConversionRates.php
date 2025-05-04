<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class ConversionRates
{
    use Arrayable;

    /**
     * From currency
     */
    private ?string $fromCurrency = null;

    /**
     * To currency
     */
    private ?string $toCurrency = null;

    /**
     * Conversion rate
     */
    private ?float $convRate = null;

    /**
     * Get from currency.
     */
    public function getFromCurrency(): ?string
    {
        return $this->fromCurrency;
    }

    /**
     * Set from currency.
     */
    public function setFromCurrency(?string $fromCurrency): self
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * Get to currency.
     */
    public function getToCurrency(): ?string
    {
        return $this->toCurrency;
    }

    /**
     * Set to currency.
     */
    public function setToCurrency(?string $toCurrency): self
    {
        $this->toCurrency = $toCurrency;

        return $this;
    }

    /**
     * Get conversion rate.
     */
    public function getConvRate(): ?float
    {
        return $this->convRate;
    }

    /**
     * Set conversion rate.
     */
    public function setConvRate(?float $convRate): self
    {
        $this->convRate = $convRate;

        return $this;
    }
}
