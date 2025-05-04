<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderSide;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Position
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Position code
     */
    private ?string $positionCode = null;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Quantity
     */
    private ?float $quantity = null;

    /**
     * Side
     *
     * @see OrderSide
     */
    private ?string $side = null;

    /**
     * Quantity notional
     */
    private ?float $quantityNotional = null;

    /**
     * Last update time
     */
    private ?DXtradeDateTime $lastUpdateTime = null;

    /**
     * Open price
     */
    private ?float $openPrice = null;

    /**
     * Margin rate
     */
    private ?float $marginRate = null;

    /**
     * Take profit price
     */
    private ?float $takeProfitPrice = null;

    /**
     * Stop loss price
     */
    private ?float $stopLossPrice = null;

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
     * Get quantity.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Set quantity.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get side.
     *
     * @see OrderSide
     */
    public function getSide(): ?string
    {
        return $this->side;
    }

    /**
     * Set side.
     *
     * @see OrderSide
     */
    public function setSide(?string $side): self
    {
        $this->side = $side;

        return $this;
    }

    /**
     * Get quantity notional.
     */
    public function getQuantityNotional(): ?float
    {
        return $this->quantityNotional;
    }

    /**
     * Set quantity notional.
     */
    public function setQuantityNotional(?float $quantityNotional): self
    {
        $this->quantityNotional = $quantityNotional;

        return $this;
    }

    /**
     * Get last update time.
     */
    public function getLastUpdateTime(): ?DXtradeDateTime
    {
        return $this->lastUpdateTime;
    }

    /**
     * Set last update time.
     */
    public function setLastUpdateTime(?DXtradeDateTime $lastUpdateTime): self
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * Get open price.
     */
    public function getOpenPrice(): ?float
    {
        return $this->openPrice;
    }

    /**
     * Set open price.
     */
    public function setOpenPrice(?float $openPrice): self
    {
        $this->openPrice = $openPrice;

        return $this;
    }

    /**
     * Get margin rate.
     */
    public function getMarginRate(): ?float
    {
        return $this->marginRate;
    }

    /**
     * Set margin rate.
     */
    public function setMarginRate(?float $marginRate): self
    {
        $this->marginRate = $marginRate;

        return $this;
    }

    /**
     * Get take profit price.
     */
    public function getTakeProfitPrice(): ?float
    {
        return $this->takeProfitPrice;
    }

    /**
     * Set take profit price.
     */
    public function setTakeProfitPrice(?float $takeProfitPrice): self
    {
        $this->takeProfitPrice = $takeProfitPrice;

        return $this;
    }

    /**
     * Get stop loss price.
     */
    public function getStopLossPrice(): ?float
    {
        return $this->stopLossPrice;
    }

    /**
     * Set stop loss price.
     */
    public function setStopLossPrice(?float $stopLossPrice): self
    {
        $this->stopLossPrice = $stopLossPrice;

        return $this;
    }
}
