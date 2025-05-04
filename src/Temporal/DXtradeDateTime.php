<?php

namespace AlexStewartJa\DXtrade\Temporal;

use AlexStewartJa\DXtrade\Env;

class DXtradeDateTime extends \AlexStewartJa\DXtrade\Temporal\DateTime
{
    public static function ofString(string $dateTimeString): ?DXtradeDateTime
    {
        return self::createFromFormat(Env::DATETIME_FORMAT, $dateTimeString);
    }

    public static function asString(\AlexStewartJa\DXtrade\Temporal\DateTime $dateTime): string
    {
        return $dateTime->format(Env::DATETIME_FORMAT);
    }
}
