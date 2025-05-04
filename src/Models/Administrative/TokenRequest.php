<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class TokenRequest
{
    use Arrayable;

    /**
     * DX Core session token
     */
    private ?string $dxCoreSessionToken = null;

    /**
     * Token duration
     */
    private ?int $tokenDuration = null;

    /**
     * Token origin
     */
    private ?string $tokenOrigin = null;

    /**
     * Get DX Core session token.
     */
    public function getDxCoreSessionToken(): ?string
    {
        return $this->dxCoreSessionToken;
    }

    /**
     * Set DX Core session token.
     */
    public function setDxCoreSessionToken(?string $dxCoreSessionToken): self
    {
        $this->dxCoreSessionToken = $dxCoreSessionToken;

        return $this;
    }

    /**
     * Get token duration.
     */
    public function getTokenDuration(): ?int
    {
        return $this->tokenDuration;
    }

    /**
     * Set token duration.
     */
    public function setTokenDuration(?int $tokenDuration): self
    {
        $this->tokenDuration = $tokenDuration;

        return $this;
    }

    /**
     * Get token origin.
     */
    public function getTokenOrigin(): ?string
    {
        return $this->tokenOrigin;
    }

    /**
     * Set token origin.
     */
    public function setTokenOrigin(?string $tokenOrigin): self
    {
        $this->tokenOrigin = $tokenOrigin;

        return $this;
    }
}
