<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class Location
{
    use Arrayable;

    /**
     * Country code
     */
    private ?string $countryCode = null;

    /**
     * Zip code
     */
    private ?string $zipCode = null;

    /**
     * Address
     */
    private ?string $address = null;

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
     * Get zip code.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zip code.
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Set address.
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
