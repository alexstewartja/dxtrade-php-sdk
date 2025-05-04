<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class InstrumentDetailsList
{
    use Arrayable;

    /**
     * Instrument details
     *
     * @var InstrumentDetails[]|null
     */
    private ?array $instrumentDetails = null;

    /**
     * Get instrument details.
     *
     * @return InstrumentDetails[]|null
     */
    public function getInstrumentDetails(): ?array
    {
        return $this->instrumentDetails;
    }

    /**
     * Set instrument details.
     *
     * @param  InstrumentDetails[]|null  $instrumentDetails
     */
    public function setInstrumentDetails(?array $instrumentDetails): self
    {
        $this->instrumentDetails = $instrumentDetails;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'instrumentDetails' => InstrumentDetails::class,
        ];
    }
}
