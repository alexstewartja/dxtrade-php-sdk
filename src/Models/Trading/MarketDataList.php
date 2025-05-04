<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarketDataList
{
    use Arrayable;

    /**
     * Events
     *
     * @var MarketEvent[]|null
     */
    private ?array $events = null;

    /**
     * Get events.
     *
     * @return MarketEvent[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Set events.
     *
     * @param  MarketEvent[]|null  $events
     */
    public function setEvents(?array $events): self
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'events' => MarketEvent::class,
        ];
    }
}
