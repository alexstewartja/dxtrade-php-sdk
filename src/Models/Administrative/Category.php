<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\CategoryDomain;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Category
{
    use Arrayable;

    /**
     * Category
     *
     * @see CategoryDomain
     */
    private ?string $category = null;

    /**
     * Values
     *
     * @var CategoryValue[]|null
     */
    private ?array $values = null;

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
     * Get values.
     *
     * @return CategoryValue[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * Set values.
     *
     * @param  CategoryValue[]|null  $values
     */
    public function setValues(?array $values): self
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'values' => CategoryValue::class,
        ];
    }
}
