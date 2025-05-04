<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\CategoryDomain;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountCategory
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
     *
     * @see CategoryDomain
     */
    private ?string $category = null;

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
}
