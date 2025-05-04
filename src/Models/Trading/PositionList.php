<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class PositionList
{
    use Arrayable;

    /**
     * Positions
     *
     * @var Position[]|null
     */
    private ?array $positions = null;

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
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'positions' => Position::class,
        ];
    }
}
