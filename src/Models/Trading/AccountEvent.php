<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountEvent
{
    use Arrayable;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Event type
     */
    private ?string $eventType = null;

    /**
     * Risk level threshold
     */
    private float|int|null $riskLevelThreshold = null;

    /**
     * Actual risk level
     */
    private float|int|null $actualRiskLevel = null;

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
     * Get event type.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Set event type.
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get risk level threshold.
     */
    public function getRiskLevelThreshold(): float|int|null
    {
        return $this->riskLevelThreshold;
    }

    /**
     * Set risk level threshold.
     */
    public function setRiskLevelThreshold(float|int|null $riskLevelThreshold): self
    {
        $this->riskLevelThreshold = $riskLevelThreshold;

        return $this;
    }

    /**
     * Get actual risk level.
     */
    public function getActualRiskLevel(): float|int|null
    {
        return $this->actualRiskLevel;
    }

    /**
     * Set actual risk level.
     */
    public function setActualRiskLevel(float|int|null $actualRiskLevel): self
    {
        $this->actualRiskLevel = $actualRiskLevel;

        return $this;
    }
}
