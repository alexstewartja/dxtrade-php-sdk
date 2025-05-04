<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountMetricsList
{
    use Arrayable;

    /**
     * Metrics
     *
     * @var AccountMetrics[]|null
     */
    private ?array $metrics = null;

    /**
     * Get metrics.
     *
     * @return AccountMetrics[]|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * Set metrics.
     *
     * @param  AccountMetrics[]|null  $metrics
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;

        return $this;
    }

    public function getClassListMappings(): array
    {
        return [
            'metrics' => AccountMetrics::class,
        ];
    }
}
