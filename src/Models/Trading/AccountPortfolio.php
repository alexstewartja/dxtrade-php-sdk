<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountPortfolio
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
     * Balances
     *
     * @var Balance[]|null
     */
    private ?array $balances = null;

    /**
     * Positions
     *
     * @var Position[]|null
     */
    private ?array $positions = null;

    /**
     * Orders
     *
     * @var Order[]|null
     */
    private ?array $orders = null;

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
     * Get balances.
     *
     * @return Balance[]|null
     */
    public function getBalances(): ?array
    {
        return $this->balances;
    }

    /**
     * Set balances.
     *
     * @param  Balance[]|null  $balances
     */
    public function setBalances(?array $balances): self
    {
        $this->balances = $balances;

        return $this;
    }

    /**
     * Get positions.
     *
     * @return Position[]|null
     */
    public function getPositions(): ?array
    {
        return $this->positions;
    }

    /**
     * Set positions.
     *
     * @param  Position[]|null  $positions
     */
    public function setPositions(?array $positions): self
    {
        $this->positions = $positions;

        return $this;
    }

    /**
     * Get orders.
     *
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * Set orders.
     *
     * @param  Order[]|null  $orders
     */
    public function setOrders(?array $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getClassListMappings(): array
    {
        return [
            'balances' => Balance::class,
            'positions' => Position::class,
            'orders' => Order::class,
        ];
    }
}
