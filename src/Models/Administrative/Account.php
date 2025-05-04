<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\AccountCashType;
use AlexStewartJa\DXtrade\Enums\AccountStatus;
use AlexStewartJa\DXtrade\Enums\AccountStatusType;
use AlexStewartJa\DXtrade\Enums\AccountType;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Account
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
     * Broker code
     */
    private ?string $brokerCode = null;

    /**
     * Type
     *
     * @see AccountType
     */
    private ?string $type = null;

    /**
     * Status
     *
     * @see AccountStatus
     */
    private ?string $status = null;

    /**
     * Account cash type
     *
     * @see AccountCashType
     */
    private ?string $accountCashType = null;

    /**
     * Expiration date
     */
    private ?DXtradeDateTime $expirationDate = null;

    /**
     * Account type
     *
     * @see AccountStatusType
     */
    private ?string $accountType = null;

    /**
     * Currency
     */
    private ?string $currency = null;

    /**
     * Balance
     */
    private ?float $balance = null;

    /**
     * Credit
     */
    private ?float $credit = null;

    /**
     * Categories
     *
     * @var AccountGroup[]|null
     */
    private ?array $categories = null;

    /**
     * Metadata
     */
    private ?array $metadata = null;

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
     * Get broker code.
     */
    public function getBrokerCode(): ?string
    {
        return $this->brokerCode;
    }

    /**
     * Set broker code.
     */
    public function setBrokerCode(?string $brokerCode): self
    {
        $this->brokerCode = $brokerCode;

        return $this;
    }

    /**
     * Get type.
     *
     * @see AccountType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see AccountType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

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
     * Get account cash type.
     *
     * @see AccountCashType
     */
    public function getAccountCashType(): ?string
    {
        return $this->accountCashType;
    }

    /**
     * Set account cash type.
     *
     * @see AccountCashType
     */
    public function setAccountCashType(?string $accountCashType): self
    {
        $this->accountCashType = $accountCashType;

        return $this;
    }

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
     * Get account type.
     *
     * @see AccountStatusType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * Set account type.
     *
     * @see AccountStatusType
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency.
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get balance.
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * Set balance.
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;

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
     * Get categories.
     *
     * @return AccountGroup[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * Set categories.
     *
     * @param  AccountGroup[]|null  $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->categories = $categories;

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
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'categories' => AccountGroup::class,
        ];
    }
}
