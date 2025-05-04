<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Temporal\DXtradeDate;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Document
{
    use Arrayable;

    /**
     * Type
     */
    private ?string $type = null;

    /**
     * Series
     */
    private ?string $series = null;

    /**
     * Number
     */
    private ?string $number = null;

    /**
     * Issued by
     */
    private ?string $issuedBy = null;

    /**
     * Issued date
     */
    private ?DXtradeDate $issuedDate = null;

    /**
     * Get type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get series.
     */
    public function getSeries(): ?string
    {
        return $this->series;
    }

    /**
     * Set series.
     */
    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Set number.
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get issued by.
     */
    public function getIssuedBy(): ?string
    {
        return $this->issuedBy;
    }

    /**
     * Set issued by.
     */
    public function setIssuedBy(?string $issuedBy): self
    {
        $this->issuedBy = $issuedBy;

        return $this;
    }

    /**
     * Get issued date.
     */
    public function getIssuedDate(): ?DXtradeDate
    {
        return $this->issuedDate;
    }

    /**
     * Set issued date.
     */
    public function setIssuedDate(?DXtradeDate $issuedDate): self
    {
        $this->issuedDate = $issuedDate;

        return $this;
    }
}
