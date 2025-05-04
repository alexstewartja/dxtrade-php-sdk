<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\OrderSide;
use AlexStewartJa\DXtrade\Enums\PositionEffect;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class OrderLeg
{
    use Arrayable;

    /**
     * Instrument
     */
    private ?string $instrument = null;

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
     * Price
     */
    private ?float $price = null;

    /**
     * Leg ratio
     */
    private ?float $legRatio = null;

    /**
     * Quantity
     */
    private ?float $quantity = null;

    /**
     * Filled quantity
     */
    private ?float $filledQuantity = null;

    /**
     * Remaining quantity
     */
    private ?float $remainingQuantity = null;

    /**
     * Average price
     */
    private ?float $averagePrice = null;

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
     * Get price.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Set price.
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get leg ratio.
     */
    public function getLegRatio(): ?float
    {
        return $this->legRatio;
    }

    /**
     * Set leg ratio.
     */
    public function setLegRatio(?float $legRatio): self
    {
        $this->legRatio = $legRatio;

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
     * Get filled quantity.
     */
    public function getFilledQuantity(): ?float
    {
        return $this->filledQuantity;
    }

    /**
     * Set filled quantity.
     */
    public function setFilledQuantity(?float $filledQuantity): self
    {
        $this->filledQuantity = $filledQuantity;

        return $this;
    }

    /**
     * Get remaining quantity.
     */
    public function getRemainingQuantity(): ?float
    {
        return $this->remainingQuantity;
    }

    /**
     * Set remaining quantity.
     */
    public function setRemainingQuantity(?float $remainingQuantity): self
    {
        $this->remainingQuantity = $remainingQuantity;

        return $this;
    }

    /**
     * Get average price.
     */
    public function getAveragePrice(): ?float
    {
        return $this->averagePrice;
    }

    /**
     * Set average price.
     */
    public function setAveragePrice(?float $averagePrice): self
    {
        $this->averagePrice = $averagePrice;

        return $this;
    }
}
