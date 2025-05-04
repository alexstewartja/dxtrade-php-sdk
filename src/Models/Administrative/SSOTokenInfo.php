<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class SSOTokenInfo
{
    use Arrayable;

    /**
     * Expiration time
     */
    private ?int $expirationTime = null;

    /**
     * User name
     */
    private ?string $userName = null;

    /**
     * User domain
     */
    private ?string $userDomain = null;

    /**
     * User ID
     */
    private ?int $userId = null;

    /**
     * Serial number
     */
    private ?int $serialNumber = null;

    /**
     * Get expiration time.
     */
    public function getExpirationTime(): ?int
    {
        return $this->expirationTime;
    }

    /**
     * Set expiration time.
     */
    public function setExpirationTime(?int $expirationTime): self
    {
        $this->expirationTime = $expirationTime;

        return $this;
    }

    /**
     * Get user name.
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * Set user name.
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get user domain.
     */
    public function getUserDomain(): ?string
    {
        return $this->userDomain;
    }

    /**
     * Set user domain.
     */
    public function setUserDomain(?string $userDomain): self
    {
        $this->userDomain = $userDomain;

        return $this;
    }

    /**
     * Get user ID.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * Set user ID.
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get serial number.
     */
    public function getSerialNumber(): ?int
    {
        return $this->serialNumber;
    }

    /**
     * Set serial number.
     */
    public function setSerialNumber(?int $serialNumber): self
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }
}
