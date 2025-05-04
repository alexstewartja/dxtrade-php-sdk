<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountMetrics
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
     * Equity
     */
    private float|int|null $equity = null;

    /**
     * Balance
     */
    private float|int|null $balance = null;

    /**
     * Available balance
     */
    private float|int|null $availableBalance = null;

    /**
     * Available funds
     */
    private float|int|null $availableFunds = null;

    /**
     * Credit
     */
    private float|int|null $credit = null;

    /**
     * Margin free
     */
    private float|int|null $marginFree = null;

    /**
     * Open PL
     */
    private float|int|null $openPL = null;

    /**
     * Total PL
     */
    private float|int|null $totalPL = null;

    /**
     * Margin
     */
    private float|int|null $margin = null;

    /**
     * Open positions count
     */
    private ?int $openPositionsCount = null;

    /**
     * Open orders count
     */
    private ?int $openOrdersCount = null;

    /**
     * Positions
     *
     * @var PositionMetrics[]|null
     */
    private ?array $positions = null;

    /**
     * Balances
     *
     * @var CurrencyMetrics[]|null
     */
    private ?array $balances = null;

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
     * Get equity.
     */
    public function getEquity(): float|int|null
    {
        return $this->equity;
    }

    /**
     * Set equity.
     */
    public function setEquity(float|int|null $equity): self
    {
        $this->equity = $equity;

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
     * Get available balance.
     */
    public function getAvailableBalance(): float|int|null
    {
        return $this->availableBalance;
    }

    /**
     * Set available balance.
     */
    public function setAvailableBalance(float|int|null $availableBalance): self
    {
        $this->availableBalance = $availableBalance;

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
     * Get credit.
     */
    public function getCredit(): float|int|null
    {
        return $this->credit;
    }

    /**
     * Set credit.
     */
    public function setCredit(float|int|null $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get margin free.
     */
    public function getMarginFree(): float|int|null
    {
        return $this->marginFree;
    }

    /**
     * Set margin free.
     */
    public function setMarginFree(float|int|null $marginFree): self
    {
        $this->marginFree = $marginFree;

        return $this;
    }

    /**
     * Get open PL.
     */
    public function getOpenPL(): float|int|null
    {
        return $this->openPL;
    }

    /**
     * Set open PL.
     */
    public function setOpenPL(float|int|null $openPL): self
    {
        $this->openPL = $openPL;

        return $this;
    }

    /**
     * Get total PL.
     */
    public function getTotalPL(): float|int|null
    {
        return $this->totalPL;
    }

    /**
     * Set total PL.
     */
    public function setTotalPL(float|int|null $totalPL): self
    {
        $this->totalPL = $totalPL;

        return $this;
    }

    /**
     * Get margin.
     */
    public function getMargin(): float|int|null
    {
        return $this->margin;
    }

    /**
     * Set margin.
     */
    public function setMargin(float|int|null $margin): self
    {
        $this->margin = $margin;

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
     * Get positions.
     *
     * @return PositionMetrics[]|null
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * Set positions.
     *
     * @param  PositionMetrics[]|null  $positions
     */
    public function setPositions(?array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Get balances.
     *
     * @return CurrencyMetrics[]|null
     */
    public function getBalances(): ?array
    {
        return $this->balances;
    }

    /**
     * Set balances.
     *
     * @param  CurrencyMetrics[]|null  $balances
     */
    public function setBalances(?array $balances): self
    {
        $this->balances = $balances;

        return $this;
    }

    public function getClassListMappings(): array
    {
        return [
            'positions' => PositionMetrics::class,
            'balances' => CurrencyMetrics::class,
        ];
    }
}
