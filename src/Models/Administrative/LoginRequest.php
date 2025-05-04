<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class LoginRequest
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
     * Password
     */
    private ?string $password = null;

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
     * Get password.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password.
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
