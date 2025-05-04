<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Enums\MarketEventFormat;
use AlexStewartJa\DXtrade\Enums\MarketEventType;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class MarketEventRequestType
{
    use Arrayable;

    /**
     * Type
     *
     * Either `Quote` or `Candle`
     *
     * @see MarketEventType
     */
    private ?string $type = null;

    /**
     * Format
     *
     * Always `COMPACT`
     *
     * @see MarketEventFormat
     */
    private ?string $format = null;

    /**
     * Candle Type
     *
     * Type of the candle, only for candle queries
     */
    private ?string $candleType = null;

    /**
     * From Time
     *
     * Required for `Candle` type. UTC time to get history from.
     */
    private ?DXtradeDateTime $fromTime = null;

    /**
     * To Time
     *
     * Required for `Candle` type. UTC time to get history till.
     */
    private ?DXtradeDateTime $toTime = null;

    /**
     * Count
     *
     * Maximum count of candles in response.
     * If not defined, used value predefined on server side.
     */
    private ?int $count = null;

    /**
     * Get type.
     *
     * Either `Quote` or `Candle`
     *
     * @see MarketEventType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * Either `Quote` or `Candle`
     *
     * @see MarketEventType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get format.
     *
     * @see MarketEventFormat
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Set format.
     *
     * @see MarketEventFormat
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get candle type.
     */
    public function getCandleType(): ?string
    {
        return $this->candleType;
    }

    /**
     * Set candle type.
     */
    public function setCandleType(?string $candleType): self
    {
        $this->candleType = $candleType;

        return $this;
    }

    /**
     * Get from time.
     */
    public function getFromTime(): ?DXtradeDateTime
    {
        return $this->fromTime;
    }

    /**
     * Set from time.
     */
    public function setFromTime(?DXtradeDateTime $fromTime): self
    {
        $this->fromTime = $fromTime;

        return $this;
    }

    /**
     * Get to time.
     */
    public function getToTime(): ?DXtradeDateTime
    {
        return $this->toTime;
    }

    /**
     * Set to time.
     */
    public function setToTime(?DXtradeDateTime $toTime): self
    {
        $this->toTime = $toTime;

        return $this;
    }

    /**
     * Get count.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Set count.
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    protected function afterFromArray(array &$data): void
    {
        if (empty($this->format)) {
            $this->format = MarketEventFormat::COMPACT->value;
        }
    }

    protected function afterToArray(array &$fields): void
    {
        if (empty($fields['format'])) {
            $fields['format'] = MarketEventFormat::COMPACT->value;
        }
    }
}
