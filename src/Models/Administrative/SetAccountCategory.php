<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class SetAccountCategory
{
    use Arrayable;

    /**
     * Clearing code
     */
    private ?string $clearingCode = null;

    /**
     * Account code
     */
    private ?string $accountCode = null;

    /**
     * Category
     */
    private ?string $category = null;

    /**
     * Value
     */
    private ?string $value = null;

    /**
     * Get clearing code.
     */
    public function getClearingCode(): ?string
    {
        return $this->clearingCode;
    }

    /**
     * Set clearing code.
     */
    public function setClearingCode(?string $clearingCode): self
    {
        $this->clearingCode = $clearingCode;

        return $this;
    }

    /**
     * Get account code.
     */
    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    /**
     * Set account code.
     */
    public function setAccountCode(?string $accountCode): self
    {
        $this->accountCode = $accountCode;

        return $this;
    }

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
