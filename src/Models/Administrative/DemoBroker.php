<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\BrokerType;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class DemoBroker
{
    use Arrayable;

    /**
     * Name
     */
    private ?string $name = null;

    /**
     * Broker code
     */
    private ?string $brokerCode = null;

    /**
     * Namespace
     */
    private ?string $namespace = null;

    /**
     * Parent broker code
     */
    private ?string $parentBrokerCode = null;

    /**
     * Country code
     */
    private ?string $countryCode = null;

    /**
     * Type
     *
     * @see BrokerType
     */
    private ?string $type = null;

    /**
     * Description
     */
    private ?string $description = null;

    /**
     * Client principal group
     */
    private ?string $clientPrincipalGroup = null;

    /**
     * Dealer principal group
     */
    private ?string $dealerPrincipalGroup = null;

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
     * Get broker code.
     */
    public function getBrokerCode(): ?string
    {
        return $this->brokerCode;
    }

    /**
     * Set broker code.
     */
    public function setBrokerCode(?string $brokerCode): self
    {
        $this->brokerCode = $brokerCode;

        return $this;
    }

    /**
     * Get namespace.
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Set namespace.
     */
    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Get parent broker code.
     */
    public function getParentBrokerCode(): ?string
    {
        return $this->parentBrokerCode;
    }

    /**
     * Set parent broker code.
     */
    public function setParentBrokerCode(?string $parentBrokerCode): self
    {
        $this->parentBrokerCode = $parentBrokerCode;

        return $this;
    }

    /**
     * Get country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Set country code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get type.
     *
     * @see BrokerType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see BrokerType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get client principal group.
     */
    public function getClientPrincipalGroup(): ?string
    {
        return $this->clientPrincipalGroup;
    }

    /**
     * Set client principal group.
     */
    public function setClientPrincipalGroup(?string $clientPrincipalGroup): self
    {
        $this->clientPrincipalGroup = $clientPrincipalGroup;

        return $this;
    }

    /**
     * Get dealer principal group.
     */
    public function getDealerPrincipalGroup(): ?string
    {
        return $this->dealerPrincipalGroup;
    }

    /**
     * Set dealer principal group.
     */
    public function setDealerPrincipalGroup(?string $dealerPrincipalGroup): self
    {
        $this->dealerPrincipalGroup = $dealerPrincipalGroup;

        return $this;
    }
}
