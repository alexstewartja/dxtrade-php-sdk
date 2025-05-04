<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class SsoTokenLoginRequest
{
    use Arrayable;

    /**
     * Username
     */
    private ?string $username = null;

    /**
     * Domain
     */
    private ?string $domain = null;

    /**
     * Token
     */
    private ?string $token = null;

    /**
     * Get username.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set username.
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get domain.
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * Set domain.
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get token.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Set token.
     */
    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
