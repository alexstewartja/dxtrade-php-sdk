<?php

namespace AlexStewartJa\DXtrade\Traits;

trait ETaggable
{
    /**
     * ETag
     */
    private ?string $eTag = null;

    /**
     * Get ETag.
     */
    public function getETag(): ?string
    {
        return $this->eTag;
    }

    /**
     * Set ETag.
     */
    public function setETag(?string $eTag): self
    {
        $this->eTag = $eTag;

        return $this;
    }
}
