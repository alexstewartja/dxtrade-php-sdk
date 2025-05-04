<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\MarginRateType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarginRate
{
    use Arrayable;

    /**
     * Rate type
     *
     * @see MarginRateType
     */
    private ?string $rateType = null;

    /**
     * Tiers
     *
     * @var MarginTier[]|null
     */
    private ?array $tiers = null;

    /**
     * Available margin rates
     */
    private ?TraderSelectedMarginRates $availableMarginRates = null;

    /**
     * Get rate type.
     *
     * @see MarginRateType
     */
    public function getRateType(): ?string
    {
        return $this->rateType;
    }

    /**
     * Set rate type.
     *
     * @see MarginRateType
     */
    public function setRateType(?string $rateType): self
    {
        $this->rateType = $rateType;

        return $this;
    }

    /**
     * Get tiers.
     *
     * @return MarginTier[]|null
     */
    public function getTiers(): ?array
    {
        return $this->tiers;
    }

    /**
     * Set tiers.
     *
     * @param  MarginTier[]|null  $tiers
     */
    public function setTiers(?array $tiers): self
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * Get available margin rates.
     */
    public function getAvailableMarginRates(): ?TraderSelectedMarginRates
    {
        return $this->availableMarginRates;
    }

    /**
     * Set available margin rates.
     */
    public function setAvailableMarginRates(?TraderSelectedMarginRates $availableMarginRates): self
    {
        $this->availableMarginRates = $availableMarginRates;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'tiers' => MarginTier::class,
        ];
    }
}
