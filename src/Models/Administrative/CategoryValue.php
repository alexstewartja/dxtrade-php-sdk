<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class CategoryValue
{
    use Arrayable;

    /**
     * Value
     */
    private ?string $value = null;

    /**
     * Get value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
