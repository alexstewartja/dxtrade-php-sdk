<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class PositionMetrics
{
    use Arrayable;

    /**
     * Position code
     */
    private ?string $positionCode = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Rate
     */
    private float|int|null $rate = null;

    /**
     * FPL
     */
    private float|int|null $fpl = null;

    /**
     * Conversion rate
     */
    private float|int|null $convRate = null;

    /**
     * Bid open
     */
    private float|int|null $bidOpen = null;

    /**
     * Ask open
     */
    private float|int|null $askOpen = null;

    /**
     * Margin rate
     */
    private float|int|null $marginRate = null;

    /**
     * Margin
     */
    private float|int|null $margin = null;

    /**
     * Quantity
     */
    private float|int|null $quantity = null;

    /**
     * Quantity notional
     */
    private float|int|null $quantityNotional = null;

    /**
     * Open price
     */
    private float|int|null $openPrice = null;

    /**
     * Open price instrument currency
     */
    private float|int|null $openPriceInstrumentCcy = null;

    /**
     * FPL instrument currency
     */
    private float|int|null $fplInstrumentCcy = null;

    /**
     * Instrument currency
     */
    private ?string $instrumentCurrency = null;

    /**
     * Current price instrument currency
     */
    private float|int|null $currentPriceInstrumentCcy = null;

    /**
     * Get position code.
     */
    public function getPositionCode(): ?string
    {
        return $this->positionCode;
    }

    /**
     * Set position code.
     */
    public function setPositionCode(?string $positionCode): self
    {
        $this->positionCode = $positionCode;

        return $this;
    }

    /**
     * Get version.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Set version.
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;

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
     * Get rate.
     */
    public function getRate(): float|int|null
    {
        return $this->rate;
    }

    /**
     * Set rate.
     */
    public function setRate(float|int|null $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get FPL.
     */
    public function getFpl(): float|int|null
    {
        return $this->fpl;
    }

    /**
     * Set FPL.
     */
    public function setFpl(float|int|null $fpl): self
    {
        $this->fpl = $fpl;

        return $this;
    }

    /**
     * Get conversion rate.
     */
    public function getConvRate(): float|int|null
    {
        return $this->convRate;
    }

    /**
     * Set conversion rate.
     */
    public function setConvRate(float|int|null $convRate): self
    {
        $this->convRate = $convRate;

        return $this;
    }

    /**
     * Get bid open.
     */
    public function getBidOpen(): float|int|null
    {
        return $this->bidOpen;
    }

    /**
     * Set bid open.
     */
    public function setBidOpen(float|int|null $bidOpen): self
    {
        $this->bidOpen = $bidOpen;

        return $this;
    }

    /**
     * Get ask open.
     */
    public function getAskOpen(): float|int|null
    {
        return $this->askOpen;
    }

    /**
     * Set ask open.
     */
    public function setAskOpen(float|int|null $askOpen): self
    {
        $this->askOpen = $askOpen;

        return $this;
    }

    /**
     * Get margin rate.
     */
    public function getMarginRate(): float|int|null
    {
        return $this->marginRate;
    }

    /**
     * Set margin rate.
     */
    public function setMarginRate(float|int|null $marginRate): self
    {
        $this->marginRate = $marginRate;

        return $this;
    }

    /**
     * Get margin.
     */
    public function getMargin(): float|int|null
    {
        return $this->margin;
    }

    /**
     * Set margin.
     */
    public function setMargin(float|int|null $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * Get quantity.
     */
    public function getQuantity(): float|int|null
    {
        return $this->quantity;
    }

    /**
     * Set quantity.
     */
    public function setQuantity(float|int|null $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity notional.
     */
    public function getQuantityNotional(): float|int|null
    {
        return $this->quantityNotional;
    }

    /**
     * Set quantity notional.
     */
    public function setQuantityNotional(float|int|null $quantityNotional): self
    {
        $this->quantityNotional = $quantityNotional;

        return $this;
    }

    /**
     * Get open price.
     */
    public function getOpenPrice(): float|int|null
    {
        return $this->openPrice;
    }

    /**
     * Set open price.
     */
    public function setOpenPrice(float|int|null $openPrice): self
    {
        $this->openPrice = $openPrice;

        return $this;
    }

    /**
     * Get open price instrument currency.
     */
    public function getOpenPriceInstrumentCcy(): float|int|null
    {
        return $this->openPriceInstrumentCcy;
    }

    /**
     * Set open price instrument currency.
     */
    public function setOpenPriceInstrumentCcy(float|int|null $openPriceInstrumentCcy): self
    {
        $this->openPriceInstrumentCcy = $openPriceInstrumentCcy;

        return $this;
    }

    /**
     * Get FPL instrument currency.
     */
    public function getFplInstrumentCcy(): float|int|null
    {
        return $this->fplInstrumentCcy;
    }

    /**
     * Set FPL instrument currency.
     */
    public function setFplInstrumentCcy(float|int|null $fplInstrumentCcy): self
    {
        $this->fplInstrumentCcy = $fplInstrumentCcy;

        return $this;
    }

    /**
     * Get instrument currency.
     */
    public function getInstrumentCurrency(): ?string
    {
        return $this->instrumentCurrency;
    }

    /**
     * Set instrument currency.
     */
    public function setInstrumentCurrency(?string $instrumentCurrency): self
    {
        $this->instrumentCurrency = $instrumentCurrency;

        return $this;
    }

    /**
     * Get current price instrument currency.
     */
    public function getCurrentPriceInstrumentCcy(): float|int|null
    {
        return $this->currentPriceInstrumentCcy;
    }

    /**
     * Set current price instrument currency.
     */
    public function setCurrentPriceInstrumentCcy(float|int|null $currentPriceInstrumentCcy): self
    {
        $this->currentPriceInstrumentCcy = $currentPriceInstrumentCcy;

        return $this;
    }
}
