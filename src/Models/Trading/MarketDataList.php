<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\MarketEventType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarketDataList
{
    use Arrayable;

    /**
     * Events type
     *
     * @see MarketEventType
     *
     * @var string|null
     */
    private ?string $eventsType = null;

    /**
     * Events
     *
     * @var Candle[]|Quote[]|null
     */
    private ?array $events = null;


    /**
     * Get events type.
     *
     * @see MarketEventType
     */
    public function getEventsType(): ?string
    {
        return $this->eventsType;
    }

    /**
     * Set events type.
     *
     * @see MarketEventType
     */
    public function setEventsType(?string $eventsType): self
    {
        $this->eventsType = $eventsType;

        return $this;
    }

    /**
     * Get events.
     *
     * @return Candle[]|Quote[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Set events.
     *
     * @param  Candle[]|Quote[]|null  $events
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
            'events' => ($this->getEventsType() === MarketEventType::CANDLE->value ? Candle::class : Quote::class),
        ];
    }
}
