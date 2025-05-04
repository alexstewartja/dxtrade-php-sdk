<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\SessionEventType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class InstrumentSession
{
    use Arrayable;

    /**
     * Week day
     */
    private ?string $weekDay = null;

    /**
     * Event type
     *
     * @see SessionEventType
     */
    private ?string $eventType = null;

    /**
     * Get week day.
     */
    public function getWeekDay(): ?string
    {
        return $this->weekDay;
    }

    /**
     * Get week day name.
     */
    public function getWeekDayName(): ?string
    {
        return $this->weekDay ? explode(',', $this->weekDay, 2)[0] : null;
    }

    /**
     * Set week day.
     */
    public function setWeekDay(?string $weekDay): self
    {
        $this->weekDay = $weekDay;

        return $this;
    }

    /**
     * Get event type.
     *
     * @see SessionEventType
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Set event type.
     *
     * @see SessionEventType
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }
}
