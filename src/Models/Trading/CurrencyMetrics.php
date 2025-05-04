<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class CurrencyMetrics
{
    use Arrayable;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Symbol
     */
    private ?string $symbol = null;

    /**
     * Balance
     */
    private float|int|null $balance = null;

    /**
     * Allocated funds
     */
    private float|int|null $allocatedFunds = null;

    /**
     * Available funds
     */
    private float|int|null $availableFunds = null;

    /**
     * Available balance for withdrawal
     */
    private float|int|null $availableBalanceForWithdrawal = null;

    /**
     * Conversion rate
     */
    private float|int|null $convRate = null;

    /**
     * Precision
     */
    private float|int|null $precision = null;

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
     * Get symbol.
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * Set symbol.
     */
    public function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get balance.
     */
    public function getBalance(): float|int|null
    {
        return $this->balance;
    }

    /**
     * Set balance.
     */
    public function setBalance(float|int|null $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get allocated funds.
     */
    public function getAllocatedFunds(): float|int|null
    {
        return $this->allocatedFunds;
    }

    /**
     * Set allocated funds.
     */
    public function setAllocatedFunds(float|int|null $allocatedFunds): self
    {
        $this->allocatedFunds = $allocatedFunds;

        return $this;
    }

    /**
     * Get available funds.
     */
    public function getAvailableFunds(): float|int|null
    {
        return $this->availableFunds;
    }

    /**
     * Set available funds.
     */
    public function setAvailableFunds(float|int|null $availableFunds): self
    {
        $this->availableFunds = $availableFunds;

        return $this;
    }

    /**
     * Get available balance for withdrawal.
     */
    public function getAvailableBalanceForWithdrawal(): float|int|null
    {
        return $this->availableBalanceForWithdrawal;
    }

    /**
     * Set available balance for withdrawal.
     */
    public function setAvailableBalanceForWithdrawal(float|int|null $availableBalanceForWithdrawal): self
    {
        $this->availableBalanceForWithdrawal = $availableBalanceForWithdrawal;

        return $this;
    }

    /**
     * Get conversion rate.
     */
    public function getConvRate(): float|int|null
    {
        return $this->convRate;
    }

    /**
     * Set conversion rate.
     */
    public function setConvRate(float|int|null $convRate): self
    {
        $this->convRate = $convRate;

        return $this;
    }

    /**
     * Get precision.
     */
    public function getPrecision(): float|int|null
    {
        return $this->precision;
    }

    /**
     * Set precision.
     */
    public function setPrecision(float|int|null $precision): self
    {
        $this->precision = $precision;

        return $this;
    }
}
