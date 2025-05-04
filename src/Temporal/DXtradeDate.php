<?php

namespace AlexStewartJa\DXtrade\Temporal;

use AlexStewartJa\DXtrade\Env;

class DXtradeDate extends \AlexStewartJa\DXtrade\Temporal\DateTime
{
    public static function ofString(string $dateString): ?DateTime
    {
        return self::createFromFormat(Env::DATE_FORMAT, $dateString);
    }

    public static function asString(\AlexStewartJa\DXtrade\Temporal\DateTime $dateTime): string
    {
        return $dateTime->format(Env::DATE_FORMAT);
    }
}
