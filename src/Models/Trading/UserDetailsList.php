<?php

namespace AlexStewartJa\DXtrade\Models\Trading;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class UserDetailsList
{
    use Arrayable;

    /**
     * User details
     *
     * @var UserDetails[]|null
     */
    private ?array $userDetails = null;

    /**
     * Get user details.
     *
     * @return UserDetails[]|null
     */
    public function getUserDetails(): ?array
    {
        return $this->userDetails;
    }

    /**
     * Set user details.
     *
     * @param  UserDetails[]|null  $userDetails
     */
    public function setUserDetails(?array $userDetails): self
    {
        $this->userDetails = $userDetails;

        return $this;
    }

    /**
     * Get class list mappings.
     */
    public function getClassListMappings(): array
    {
        return [
            'userDetails' => UserDetails::class,
        ];
    }
}
