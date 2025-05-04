<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderSide;
use AlexStewartJa\DXtrade\Enums\OrderType;
use AlexStewartJa\DXtrade\Enums\PositionEffect;
use AlexStewartJa\DXtrade\Enums\PriceLink;
use AlexStewartJa\DXtrade\Enums\TimeInForce;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class SingleOrderRequest
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Order code
     */
    private ?string $orderCode = null;

    /**
     * Type
     *
     * @see OrderType
     */
    private ?string $type = null;

    /**
     * Instrument
     */
    private ?string $instrument = null;

    /**
     * Quantity
     */
    private ?float $quantity = null;

    /**
     * Position effect
     *
     * @see PositionEffect
     */
    private ?string $positionEffect = null;

    /**
     * Position code
     */
    private ?string $positionCode = null;

    /**
     * Side
     *
     * @see OrderSide
     */
    private ?string $side = null;

    /**
     * Limit price
     */
    private ?float $limitPrice = null;

    /**
     * Stop price
     */
    private ?float $stopPrice = null;

    /**
     * Price offset
     */
    private ?float $priceOffset = null;

    /**
     * Price link
     *
     * @see PriceLink
     */
    private ?string $priceLink = null;

    /**
     * Time in force
     *
     * @see TimeInForce
     */
    private ?string $tif = null;

    /**
     * Margin rate
     */
    private ?float $marginRate = null;

    /**
     * Expire date
     */
    private ?DXtradeDateTime $expireDate = null;

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
     * Get order code.
     */
    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    /**
     * Set order code.
     */
    public function setOrderCode(?string $orderCode): self
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Get type.
     *
     * @see OrderType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see OrderType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get instrument.
     */
    public function getInstrument(): ?string
    {
        return $this->instrument;
    }

    /**
     * Set instrument.
     */
    public function setInstrument(?string $instrument): self
    {
        $this->instrument = $instrument;

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
     * Get position effect.
     *
     * @see PositionEffect
     */
    public function getPositionEffect(): ?string
    {
        return $this->positionEffect;
    }

    /**
     * Set position effect.
     *
     * @see PositionEffect
     */
    public function setPositionEffect(?string $positionEffect): self
    {
        $this->positionEffect = $positionEffect;

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
     * Get limit price.
     */
    public function getLimitPrice(): ?float
    {
        return $this->limitPrice;
    }

    /**
     * Set limit price.
     */
    public function setLimitPrice(?float $limitPrice): self
    {
        $this->limitPrice = $limitPrice;

        return $this;
    }

    /**
     * Get stop price.
     */
    public function getStopPrice(): ?float
    {
        return $this->stopPrice;
    }

    /**
     * Set stop price.
     */
    public function setStopPrice(?float $stopPrice): self
    {
        $this->stopPrice = $stopPrice;

        return $this;
    }

    /**
     * Get price offset.
     */
    public function getPriceOffset(): ?float
    {
        return $this->priceOffset;
    }

    /**
     * Set price offset.
     */
    public function setPriceOffset(?float $priceOffset): self
    {
        $this->priceOffset = $priceOffset;

        return $this;
    }

    /**
     * Get price link.
     *
     * @see PriceLink
     */
    public function getPriceLink(): ?string
    {
        return $this->priceLink;
    }

    /**
     * Set price link.
     *
     * @see PriceLink
     */
    public function setPriceLink(?string $priceLink): self
    {
        $this->priceLink = $priceLink;

        return $this;
    }

    /**
     * Get time in force.
     *
     * @see TimeInForce
     */
    public function getTif(): ?string
    {
        return $this->tif;
    }

    /**
     * Set time in force.
     *
     * @see TimeInForce
     */
    public function setTif(?string $tif): self
    {
        $this->tif = $tif;

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
     * Get expire date.
     */
    public function getExpireDate(): ?DXtradeDateTime
    {
        return $this->expireDate;
    }

    /**
     * Set expire date.
     */
    public function setExpireDate(?DXtradeDateTime $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }
}
