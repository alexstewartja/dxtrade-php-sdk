<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarketDataRequest
{
    use Arrayable;

    /**
     * Symbols
     *
     * @var string[]|null
     */
    private ?array $symbols = null;

    /**
     * Event types
     *
     * @var MarketEventRequestType[]|null
     */
    private ?array $eventTypes = null;

    /**
     * Account in format clearing_code:account_code
     */
    private ?string $account = null;

    /**
     * Get symbols.
     *
     * @return string[]|null
     */
    public function getSymbols(): ?array
    {
        return $this->symbols;
    }

    /**
     * Set symbols.
     *
     * @param  string[]|null  $symbols
     */
    public function setSymbols(?array $symbols): self
    {
        $this->symbols = $symbols;

        return $this;
    }

    /**
     * Get event types.
     *
     * @return MarketEventRequestType[]|null
     */
    public function getEventTypes(): ?array
    {
        return $this->eventTypes;
    }

    /**
     * Set event types.
     *
     * @param  MarketEventRequestType[]|null  $eventTypes
     */
    public function setEventTypes(?array $eventTypes): self
    {
        $this->eventTypes = $eventTypes;

        return $this;
    }

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
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'eventTypes' => MarketEventRequestType::class,
        ];
    }
}
