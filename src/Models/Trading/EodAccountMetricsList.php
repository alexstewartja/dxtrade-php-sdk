<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class EodAccountMetricsList
{
    use Arrayable;

    /**
     * End of day metrics
     *
     * @var EodAccountMetrics[]|null
     */
    private ?array $eodMetrics = null;

    /**
     * Not found accounts
     *
     * @var string[]|null
     */
    private ?array $notFound = null;

    /**
     * Get end of day metrics.
     *
     * @return EodAccountMetrics[]|null
     */
    public function getEodMetrics(): ?array
    {
        return $this->eodMetrics;
    }

    /**
     * Set end of day metrics.
     *
     * @param  EodAccountMetrics[]|null  $eodMetrics
     */
    public function setEodMetrics(?array $eodMetrics): self
    {
        $this->eodMetrics = $eodMetrics;

        return $this;
    }

    /**
     * Get not found accounts.
     *
     * @return string[]|null
     */
    public function getNotFound(): ?array
    {
        return $this->notFound;
    }

    /**
     * Set not found accounts.
     *
     * @param  string[]|null  $notFound
     */
    public function setNotFound(?array $notFound): self
    {
        $this->notFound = $notFound;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'eodMetrics' => EodAccountMetrics::class,
        ];
    }
}
