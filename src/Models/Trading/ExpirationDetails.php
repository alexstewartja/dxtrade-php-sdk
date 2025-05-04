<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Temporal\DXtradeDate;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class ExpirationDetails
{
    use Arrayable;

    /**
     * Maturity date
     */
    private ?string $maturityDate = null;

    /**
     * Last trade date
     */
    private ?DXtradeDate $lastTradeDate = null;

    /**
     * Get maturity date.
     */
    public function getMaturityDate(): ?string
    {
        return $this->maturityDate;
    }

    /**
     * Set maturity date.
     */
    public function setMaturityDate(?string $maturityDate): self
    {
        $this->maturityDate = $maturityDate;

        return $this;
    }

    /**
     * Get last trade date.
     */
    public function getLastTradeDate(): ?DXtradeDate
    {
        return $this->lastTradeDate;
    }

    /**
     * Set last trade date.
     */
    public function setLastTradeDate(?DXtradeDate $lastTradeDate): self
    {
        $this->lastTradeDate = $lastTradeDate;

        return $this;
    }
}
