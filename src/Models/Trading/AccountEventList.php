<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class AccountEventList
{
    use Arrayable;

    /**
     * Account events
     *
     * @var AccountEvent[]|null
     */
    private ?array $accountEvents = null;

    /**
     * Get account events.
     *
     * @return AccountEvent[]|null
     */
    public function getAccountEvents(): ?array
    {
        return $this->accountEvents;
    }

    /**
     * Set account events.
     *
     * @param  AccountEvent[]|null  $accountEvents
     */
    public function setAccountEvents(?array $accountEvents): self
    {
        $this->accountEvents = $accountEvents;

        return $this;
    }

    public function getClassListMappings(): array
    {
        return [
            'accountEvents' => AccountEvent::class,
        ];
    }
}
