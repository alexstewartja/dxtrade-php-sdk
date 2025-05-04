<?php

namespace AlexStewartJa\DXtrade\Exceptions;

class DXtradeApiException extends DXtradeException
{
    public function __construct(int $httpStatusCode = 0, ?array $responseData = null)
    {
        parent::__construct('DXtrade API error occurred!', $httpStatusCode, $responseData);
    }
}
