<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\CategoryDomain;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountGroup
{
    use Arrayable;

    /**
     * Category
     *
     * @see CategoryDomain
     */
    private ?string $category = null;

    /**
     * Value
     */
    private ?string $value = null;

    /**
     * Get category.
     *
     * @see CategoryDomain
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Set category.
     *
     * @see CategoryDomain
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

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
