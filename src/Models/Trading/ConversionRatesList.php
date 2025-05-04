<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class ConversionRatesList
{
    use Arrayable;

    /**
     * Conversion rates
     *
     * @var ConversionRates[]|null
     */
    private ?array $conversionRates = null;

    /**
     * Get conversion rates.
     *
     * @return ConversionRates[]|null
     */
    public function getConversionRates(): ?array
    {
        return $this->conversionRates;
    }

    /**
     * Set conversion rates.
     *
     * @param  ConversionRates[]|null  $conversionRates
     */
    public function setConversionRates(?array $conversionRates): self
    {
        $this->conversionRates = $conversionRates;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'conversionRates' => ConversionRates::class,
        ];
    }
}
