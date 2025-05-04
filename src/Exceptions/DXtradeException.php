<?php

namespace AlexStewartJa\DXtrade\Exceptions;

use Exception;

class DXtradeException extends Exception
{
    protected ?array $responseData;

    public function __construct(string $message, int $code = 0, ?array $responseData = null)
    {
        parent::__construct($message, $code);
        $this->responseData = $responseData;
    }

    public function getResponseData(): ?array
    {
        return $this->responseData;
    }
}
