<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class UserDetails
{
    use Arrayable;

    /**
     * Login
     */
    private ?string $login = null;

    /**
     * Domain
     */
    private ?string $domain = null;

    /**
     * Version
     */
    private ?int $version = null;

    /**
     * Full name
     */
    private ?string $fullName = null;

    /**
     * Accounts
     *
     * @var AccountDetails[]|null
     */
    private ?array $accounts = null;

    /**
     * Username
     */
    private ?string $username = null;

    /**
     * Get login.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Set login.
     */
    public function setLogin(?string $login): self
    {
        $this->login = $login;

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
     * Get version.
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Set version.
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get full name.
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * Set full name.
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get accounts.
     *
     * @return AccountDetails[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Set accounts.
     *
     * @param  AccountDetails[]|null  $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }

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
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'accounts' => AccountDetails::class,
        ];
    }
}
