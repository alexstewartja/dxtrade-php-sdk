<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\AccountStatus;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountDetails
{
    use Arrayable;

    /**
     * Owner
     */
    private ?string $owner = null;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Base currency
     */
    private ?string $baseCurrency = null;

    /**
     * Registration time
     */
    private ?DXtradeDateTime $registrationTime = null;

    /**
     * Account status
     *
     * @see AccountStatus
     */
    private ?string $accountStatus = null;

    /**
     * Pricing stream
     */
    private ?string $pricingStream = null;

    /**
     * Position based
     */
    private ?bool $positionBased = null;

    /**
     * Get owner.
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * Set owner.
     */
    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get account in format clearing_code:account_code.
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * Set account in format clearing_code:account_code.
     */
    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get version.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Set version.
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get base currency.
     */
    public function getBaseCurrency(): ?string
    {
        return $this->baseCurrency;
    }

    /**
     * Set base currency.
     */
    public function setBaseCurrency(?string $baseCurrency): self
    {
        $this->baseCurrency = $baseCurrency;

        return $this;
    }

    /**
     * Get registration time.
     */
    public function getRegistrationTime(): ?DXtradeDateTime
    {
        return $this->registrationTime;
    }

    /**
     * Set registration time.
     */
    public function setRegistrationTime(?DXtradeDateTime $registrationTime): self
    {
        $this->registrationTime = $registrationTime;

        return $this;
    }

    /**
     * Get account status.
     *
     * @see AccountStatus
     */
    public function getAccountStatus(): ?string
    {
        return $this->accountStatus;
    }

    /**
     * Set account status.
     *
     * @see AccountStatus
     */
    public function setAccountStatus(?string $accountStatus): self
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get pricing stream.
     */
    public function getPricingStream(): ?string
    {
        return $this->pricingStream;
    }

    /**
     * Set pricing stream.
     */
    public function setPricingStream(?string $pricingStream): self
    {
        $this->pricingStream = $pricingStream;

        return $this;
    }

    /**
     * Get position based.
     */
    public function getPositionBased(): ?bool
    {
        return $this->positionBased;
    }

    /**
     * Set position based.
     */
    public function setPositionBased(?bool $positionBased): self
    {
        $this->positionBased = $positionBased;

        return $this;
    }
}
