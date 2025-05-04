<?php

namespace AlexStewartJa\DXtrade\Models\Administrative;

use AlexStewartJa\DXtrade\Traits\Arrayable;

class ErrorDescription
{
    use Arrayable;

    /**
     * Error code
     */
    private ?int $errorCode = null;

    /**
     * Error message
     */
    private ?string $errorMessage = null;

    /**
     * Error id
     */
    private ?string $errorId = null;

    /**
     * Get error code.
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * Set error code.
     */
    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get error message.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set error message.
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get error id.
     */
    public function getErrorId(): ?string
    {
        return $this->errorId;
    }

    /**
     * Set error id.
     */
    public function setErrorId(?string $errorId): self
    {
        $this->errorId = $errorId;

        return $this;
    }
}
