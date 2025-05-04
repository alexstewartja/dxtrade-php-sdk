<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class RenameAccountGroup
{
    use Arrayable;

    /**
     * Category
     */
    private ?string $category = null;

    /**
     * Old value
     */
    private ?string $oldValue = null;

    /**
     * New value
     */
    private ?string $newValue = null;

    /**
     * Get category.
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Set category.
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get old value.
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    /**
     * Set old value.
     */
    public function setOldValue(?string $oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get new value.
     */
    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    /**
     * Set new value.
     */
    public function setNewValue(?string $newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }
}
