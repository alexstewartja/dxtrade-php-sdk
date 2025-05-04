<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class EodAccountMetrics
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Account base currency
     */
    private ?string $accountBaseCurrency = null;

    /**
     * USD conversion rate
     */
    private ?float $usdConvRate = null;

    /**
     * Equity
     */
    private ?float $equity = null;

    /**
     * Balance
     */
    private ?float $balance = null;

    /**
     * Available balance
     */
    private ?float $availableBalance = null;

    /**
     * Available funds
     */
    private ?float $availableFunds = null;

    /**
     * Allocated funds
     */
    private ?float $allocatedFunds = null;

    /**
     * Margin free
     */
    private ?float $marginFree = null;

    /**
     * Margin
     */
    private ?float $margin = null;

    /**
     * Open P&L
     */
    private ?float $openPl = null;

    /**
     * Total P&L
     */
    private ?float $totalPl = null;

    /**
     * Settled P&L
     */
    private ?float $settledPL = null;

    /**
     * Credit
     */
    private ?float $credit = null;

    /**
     * Open positions count
     */
    private ?int $openPositionsCount = null;

    /**
     * Open orders count
     */
    private ?int $openOrdersCount = null;

    /**
     * Commissions
     */
    private ?float $commissions = null;

    /**
     * Financing
     */
    private ?float $financing = null;

    /**
     * Dividends
     */
    private ?float $dividends = null;

    /**
     * Deposits
     */
    private ?float $deposits = null;

    /**
     * Withdrawals
     */
    private ?float $withdrawals = null;

    /**
     * Rebates
     */
    private ?float $rebates = null;

    /**
     * Adjustments
     */
    private ?float $adjustments = null;

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
     * Get account base currency.
     */
    public function getAccountBaseCurrency(): ?string
    {
        return $this->accountBaseCurrency;
    }

    /**
     * Set account base currency.
     */
    public function setAccountBaseCurrency(?string $accountBaseCurrency): self
    {
        $this->accountBaseCurrency = $accountBaseCurrency;

        return $this;
    }

    /**
     * Get USD conversion rate.
     */
    public function getUsdConvRate(): ?float
    {
        return $this->usdConvRate;
    }

    /**
     * Set USD conversion rate.
     */
    public function setUsdConvRate(?float $usdConvRate): self
    {
        $this->usdConvRate = $usdConvRate;

        return $this;
    }

    /**
     * Get equity.
     */
    public function getEquity(): ?float
    {
        return $this->equity;
    }

    /**
     * Set equity.
     */
    public function setEquity(?float $equity): self
    {
        $this->equity = $equity;

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
     * Get available balance.
     */
    public function getAvailableBalance(): ?float
    {
        return $this->availableBalance;
    }

    /**
     * Set available balance.
     */
    public function setAvailableBalance(?float $availableBalance): self
    {
        $this->availableBalance = $availableBalance;

        return $this;
    }

    /**
     * Get available funds.
     */
    public function getAvailableFunds(): ?float
    {
        return $this->availableFunds;
    }

    /**
     * Set available funds.
     */
    public function setAvailableFunds(?float $availableFunds): self
    {
        $this->availableFunds = $availableFunds;

        return $this;
    }

    /**
     * Get allocated funds.
     */
    public function getAllocatedFunds(): ?float
    {
        return $this->allocatedFunds;
    }

    /**
     * Set allocated funds.
     */
    public function setAllocatedFunds(?float $allocatedFunds): self
    {
        $this->allocatedFunds = $allocatedFunds;

        return $this;
    }

    /**
     * Get margin free.
     */
    public function getMarginFree(): ?float
    {
        return $this->marginFree;
    }

    /**
     * Set margin free.
     */
    public function setMarginFree(?float $marginFree): self
    {
        $this->marginFree = $marginFree;

        return $this;
    }

    /**
     * Get margin.
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }

    /**
     * Set margin.
     */
    public function setMargin(?float $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * Get open P&L.
     */
    public function getOpenPl(): ?float
    {
        return $this->openPl;
    }

    /**
     * Set open P&L.
     */
    public function setOpenPl(?float $openPl): self
    {
        $this->openPl = $openPl;

        return $this;
    }

    /**
     * Get total P&L.
     */
    public function getTotalPl(): ?float
    {
        return $this->totalPl;
    }

    /**
     * Set total P&L.
     */
    public function setTotalPl(?float $totalPl): self
    {
        $this->totalPl = $totalPl;

        return $this;
    }

    /**
     * Get settled P&L.
     */
    public function getSettledPL(): ?float
    {
        return $this->settledPL;
    }

    /**
     * Set settled P&L.
     */
    public function setSettledPL(?float $settledPL): self
    {
        $this->settledPL = $settledPL;

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
     * Get open positions count.
     */
    public function getOpenPositionsCount(): ?int
    {
        return $this->openPositionsCount;
    }

    /**
     * Set open positions count.
     */
    public function setOpenPositionsCount(?int $openPositionsCount): self
    {
        $this->openPositionsCount = $openPositionsCount;

        return $this;
    }

    /**
     * Get open orders count.
     */
    public function getOpenOrdersCount(): ?int
    {
        return $this->openOrdersCount;
    }

    /**
     * Set open orders count.
     */
    public function setOpenOrdersCount(?int $openOrdersCount): self
    {
        $this->openOrdersCount = $openOrdersCount;

        return $this;
    }

    /**
     * Get commissions.
     */
    public function getCommissions(): ?float
    {
        return $this->commissions;
    }

    /**
     * Set commissions.
     */
    public function setCommissions(?float $commissions): self
    {
        $this->commissions = $commissions;

        return $this;
    }

    /**
     * Get financing.
     */
    public function getFinancing(): ?float
    {
        return $this->financing;
    }

    /**
     * Set financing.
     */
    public function setFinancing(?float $financing): self
    {
        $this->financing = $financing;

        return $this;
    }

    /**
     * Get dividends.
     */
    public function getDividends(): ?float
    {
        return $this->dividends;
    }

    /**
     * Set dividends.
     */
    public function setDividends(?float $dividends): self
    {
        $this->dividends = $dividends;

        return $this;
    }

    /**
     * Get deposits.
     */
    public function getDeposits(): ?float
    {
        return $this->deposits;
    }

    /**
     * Set deposits.
     */
    public function setDeposits(?float $deposits): self
    {
        $this->deposits = $deposits;

        return $this;
    }

    /**
     * Get withdrawals.
     */
    public function getWithdrawals(): ?float
    {
        return $this->withdrawals;
    }

    /**
     * Set withdrawals.
     */
    public function setWithdrawals(?float $withdrawals): self
    {
        $this->withdrawals = $withdrawals;

        return $this;
    }

    /**
     * Get rebates.
     */
    public function getRebates(): ?float
    {
        return $this->rebates;
    }

    /**
     * Set rebates.
     */
    public function setRebates(?float $rebates): self
    {
        $this->rebates = $rebates;

        return $this;
    }

    /**
     * Get adjustments.
     */
    public function getAdjustments(): ?float
    {
        return $this->adjustments;
    }

    /**
     * Set adjustments.
     */
    public function setAdjustments(?float $adjustments): self
    {
        $this->adjustments = $adjustments;

        return $this;
    }
}
