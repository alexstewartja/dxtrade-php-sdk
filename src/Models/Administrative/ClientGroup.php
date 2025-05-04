<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class ClientGroup
{
    use Arrayable;

    /**
     * Domain
     */
    private ?string $domain = null;

    /**
     * Name
     */
    private ?string $name = null;

    /**
     * Clients
     *
     * @var string[]|null
     */
    private ?array $clients = null;

    /**
     * Ancestors
     *
     * @var string[]|null
     */
    private ?array $ancestors = null;

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
     * Get name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get clients.
     *
     * @return string[]|null
     */
    public function getClients(): ?array
    {
        return $this->clients;
    }

    /**
     * Set clients.
     *
     * @param  string[]|null  $clients
     */
    public function setClients(?array $clients): self
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * Get ancestors.
     *
     * @return string[]|null
     */
    public function getAncestors(): ?array
    {
        return $this->ancestors;
    }

    /**
     * Set ancestors.
     *
     * @param  string[]|null  $ancestors
     */
    public function setAncestors(?array $ancestors): self
    {
        $this->ancestors = $ancestors;

        return $this;
    }
}
