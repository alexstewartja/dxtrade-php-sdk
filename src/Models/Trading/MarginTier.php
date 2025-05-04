<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarginTier
{
    use Arrayable;

    /**
     * End volume
     */
    private ?float $endVolume = null;

    /**
     * Value
     */
    private ?float $value = null;

    /**
     * Get end volume.
     */
    public function getEndVolume(): ?float
    {
        return $this->endVolume;
    }

    /**
     * Set end volume.
     */
    public function setEndVolume(?float $endVolume): self
    {
        $this->endVolume = $endVolume;

        return $this;
    }

    /**
     * Get value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Set value.
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
