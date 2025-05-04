<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class SessionToken
{
    use Arrayable;

    /**
     * Session token
     */
    private ?string $sessionToken = null;

    /**
     * Timeout
     */
    private ?string $timeout = null;

    /**
     * Get session token.
     */
    public function getSessionToken(): ?string
    {
        return $this->sessionToken;
    }

    /**
     * Set session token.
     */
    public function setSessionToken(?string $sessionToken): self
    {
        $this->sessionToken = $sessionToken;

        return $this;
    }

    /**
     * Get timeout.
     */
    public function getTimeout(): ?string
    {
        return $this->timeout;
    }

    /**
     * Set timeout.
     */
    public function setTimeout(?string $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }
}
