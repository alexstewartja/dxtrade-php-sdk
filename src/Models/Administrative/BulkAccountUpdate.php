<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\AccountStatus;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class BulkAccountUpdate
{
    use Arrayable;

    /**
     * Expiration date
     */
    private ?DXtradeDateTime $expirationDate = null;

    /**
     * Status
     *
     * @see AccountStatus
     */
    private ?string $status = null;

    /**
     * Credit
     */
    private ?float $credit = null;

    /**
     * Metadata
     */
    private ?array $metadata = null;

    /**
     * Clearing code
     */
    private ?string $clearingCode = null;

    /**
     * Account code
     */
    private ?string $accountCode = null;

    /**
     * Get expiration date.
     */
    public function getExpirationDate(): ?DXtradeDateTime
    {
        return $this->expirationDate;
    }

    /**
     * Set expiration date.
     */
    public function setExpirationDate(?DXtradeDateTime $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get status.
     *
     * @see AccountStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @see AccountStatus
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get credit.
     */
    public function getCredit(): ?float
    {
        return $this->credit;
    }

    /**
     * Set credit.
     */
    public function setCredit(?float $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get metadata.
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Set metadata.
     */
    public function setMetadata(?array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

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
}
