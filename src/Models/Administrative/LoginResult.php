<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class LoginResult
{
    use Arrayable;

    /**
     * Session token
     */
    private ?string $sessionToken = null;

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
}
