<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\InstrumentType;
use AlexStewartJa\DXtrade\Enums\TradingStatus;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class InstrumentDetails
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Type
     *
     * @see InstrumentType
     */
    private ?string $type = null;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Trading status
     *
     * @see TradingStatus
     */
    private ?string $tradingStatus = null;

    /**
     * Min order size
     */
    private ?float $minOrderSize = null;

    /**
     * Max order size
     */
    private ?LimitValue $maxOrderSize = null;

    /**
     * Min order size increment
     */
    private ?float $minOrderSizeIncrement = null;

    /**
     * Margin rate
     */
    private ?MarginRate $marginRate = null;

    /**
     * Get account in format clearing_code:account_code.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * Set account in format clearing_code:account_code.
     */
    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get type.
     *
     * @see InstrumentType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see InstrumentType
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
     * Get trading status.
     *
     * @see TradingStatus
     */
    public function getTradingStatus(): ?string
    {
        return $this->tradingStatus;
    }

    /**
     * Set trading status.
     *
     * @see TradingStatus
     */
    public function setTradingStatus(?string $tradingStatus): self
    {
        $this->tradingStatus = $tradingStatus;

        return $this;
    }

    /**
     * Get min order size.
     */
    public function getMinOrderSize(): ?float
    {
        return $this->minOrderSize;
    }

    /**
     * Set min order size.
     */
    public function setMinOrderSize(?float $minOrderSize): self
    {
        $this->minOrderSize = $minOrderSize;

        return $this;
    }

    /**
     * Get max order size.
     */
    public function getMaxOrderSize(): ?LimitValue
    {
        return $this->maxOrderSize;
    }

    /**
     * Set max order size.
     */
    public function setMaxOrderSize(?LimitValue $maxOrderSize): self
    {
        $this->maxOrderSize = $maxOrderSize;

        return $this;
    }

    /**
     * Get min order size increment.
     */
    public function getMinOrderSizeIncrement(): ?float
    {
        return $this->minOrderSizeIncrement;
    }

    /**
     * Set min order size increment.
     */
    public function setMinOrderSizeIncrement(?float $minOrderSizeIncrement): self
    {
        $this->minOrderSizeIncrement = $minOrderSizeIncrement;

        return $this;
    }

    /**
     * Get margin rate.
     */
    public function getMarginRate(): ?MarginRate
    {
        return $this->marginRate;
    }

    /**
     * Set margin rate.
     */
    public function setMarginRate(?MarginRate $marginRate): self
    {
        $this->marginRate = $marginRate;

        return $this;
    }
}
