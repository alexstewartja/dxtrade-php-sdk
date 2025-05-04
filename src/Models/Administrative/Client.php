<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Enums\ClientStatus;
use AlexStewartJa\DXtrade\Enums\ClientType;
use AlexStewartJa\DXtrade\Temporal\DXtradeDate;
use AlexStewartJa\DXtrade\Temporal\DXtradeDateTime;
use AlexStewartJa\DXtrade\Traits\Arrayable;

class Client
{
    use Arrayable;

    /**
     * Domain
     */
    private ?string $domain = null;

    /**
     * Login
     */
    private ?string $login = null;

    /**
     * Accounts
     *
     * @var Account[]|null
     */
    private ?array $accounts = null;

    /**
     * Full name
     */
    private ?string $fullName = null;

    /**
     * Email
     */
    private ?string $email = null;

    /**
     * Broker code
     */
    private ?string $brokerCode = null;

    /**
     * Type
     *
     * @see ClientType
     */
    private ?string $type = null;

    /**
     * Status
     *
     * @see ClientStatus
     */
    private ?string $status = null;

    /**
     * Password
     */
    private ?string $password = null;

    /**
     * Password expiry
     */
    private ?int $passwordExpiry = null;

    /**
     * Password reset
     */
    private ?bool $passwordReset = null;

    /**
     * Created date time
     */
    private ?DXtradeDateTime $createdDateTime = null;

    /**
     * Last login
     */
    private ?DXtradeDateTime $lastLogin = null;

    /**
     * Groups
     *
     * @var string[]|null
     */
    private ?array $groups = null;

    /**
     * Birth place
     */
    private ?string $birthPlace = null;

    /**
     * Birth date
     */
    private ?DXtradeDate $birthDate = null;

    /**
     * Citizenship
     */
    private ?string $citizenship = null;

    /**
     * Phone
     */
    private ?string $phone = null;

    /**
     * Insurance number
     */
    private ?string $insuranceNumber = null;

    /**
     * Company
     */
    private ?string $company = null;

    /**
     * Contract date
     */
    private ?DXtradeDate $contractDate = null;

    /**
     * Location
     */
    private ?Location $location = null;

    /**
     * Document
     */
    private ?Document $document = null;

    /**
     * Comments
     */
    private ?string $comments = null;

    /**
     * User metadata
     */
    private ?array $userMetadata = null;

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
     * Get accounts.
     *
     * @return Account[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Set accounts.
     *
     * @param  Account[]|null  $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;

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
     * Get email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email.
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * Get type.
     *
     * @see ClientType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @see ClientType
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get status.
     *
     * @see ClientStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @see ClientStatus
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    /**
     * Get password expiry.
     */
    public function getPasswordExpiry(): ?int
    {
        return $this->passwordExpiry;
    }

    /**
     * Set password expiry.
     */
    public function setPasswordExpiry(?int $passwordExpiry): self
    {
        $this->passwordExpiry = $passwordExpiry;

        return $this;
    }

    /**
     * Get password reset.
     */
    public function getPasswordReset(): ?bool
    {
        return $this->passwordReset;
    }

    /**
     * Set password reset.
     */
    public function setPasswordReset(?bool $passwordReset): self
    {
        $this->passwordReset = $passwordReset;

        return $this;
    }

    /**
     * Get created date time.
     */
    public function getCreatedDateTime(): ?DXtradeDateTime
    {
        return $this->createdDateTime;
    }

    /**
     * Set created date time.
     */
    public function setCreatedDateTime(?DXtradeDateTime $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * Get last login.
     */
    public function getLastLogin(): ?DXtradeDateTime
    {
        return $this->lastLogin;
    }

    /**
     * Set last login.
     */
    public function setLastLogin(?DXtradeDateTime $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get groups.
     *
     * @return string[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * Set groups.
     *
     * @param  string[]|null  $groups
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get birth place.
     */
    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    /**
     * Set birth place.
     */
    public function setBirthPlace(?string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birth date.
     */
    public function getBirthDate(): ?DXtradeDate
    {
        return $this->birthDate;
    }

    /**
     * Set birth date.
     */
    public function setBirthDate(?DXtradeDate $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get citizenship.
     */
    public function getCitizenship(): ?string
    {
        return $this->citizenship;
    }

    /**
     * Set citizenship.
     */
    public function setCitizenship(?string $citizenship): self
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get phone.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Set phone.
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get insurance number.
     */
    public function getInsuranceNumber(): ?string
    {
        return $this->insuranceNumber;
    }

    /**
     * Set insurance number.
     */
    public function setInsuranceNumber(?string $insuranceNumber): self
    {
        $this->insuranceNumber = $insuranceNumber;

        return $this;
    }

    /**
     * Get company.
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Set company.
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get contract date.
     */
    public function getContractDate(): ?DXtradeDate
    {
        return $this->contractDate;
    }

    /**
     * Set contract date.
     */
    public function setContractDate(?DXtradeDate $contractDate): self
    {
        $this->contractDate = $contractDate;

        return $this;
    }

    /**
     * Get location.
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Set location.
     */
    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get document.
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * Set document.
     */
    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get comments.
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * Set comments.
     */
    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get user metadata.
     */
    public function getUserMetadata(): ?array
    {
        return $this->userMetadata;
    }

    /**
     * Set user metadata.
     */
    public function setUserMetadata(?array $userMetadata): self
    {
        $this->userMetadata = $userMetadata;

        return $this;
    }
}
