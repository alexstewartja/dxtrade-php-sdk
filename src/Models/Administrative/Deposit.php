<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class Deposit
{
    use Arrayable;

    /**
     * Currency
     */
    private ?string $currency = null;

    /**
     * Amount
     */
    private ?float $amount = null;

    /**
     * Description
     */
    private ?string $description = null;

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
     * Get amount.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Set amount.
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
