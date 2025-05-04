<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class InstrumentList
{
    use Arrayable;

    /**
     * Instruments
     *
     * @var Instrument[]|null
     */
    private ?array $instruments = null;

    /**
     * Get instruments.
     *
     * @return Instrument[]|null
     */
    public function getInstruments(): ?array
    {
        return $this->instruments;
    }

    /**
     * Set instruments.
     *
     * @param  Instrument[]|null  $instruments
     */
    public function setInstruments(?array $instruments): self
    {
        $this->instruments = $instruments;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'instruments' => Instrument::class,
        ];
    }
}
