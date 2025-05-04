<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountPortfolioList
{
    use Arrayable;

    /**
     * Portfolios
     *
     * @var AccountPortfolio[]|null
     */
    private ?array $portfolios = null;

    /**
     * Get portfolios.
     *
     * @return AccountPortfolio[]|null
     */
    public function getPortfolios(): ?array
    {
        return $this->portfolios;
    }

    /**
     * Set portfolios.
     *
     * @param  AccountPortfolio[]|null  $portfolios
     */
    public function setPortfolios(?array $portfolios): self
    {
        $this->portfolios = $portfolios;

        return $this;
    }

    public function getClassListMappings(): array
    {
        return [
            'portfolios' => AccountPortfolio::class,
        ];
    }
}
