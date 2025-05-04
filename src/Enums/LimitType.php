<?php

namespace AlexStewartJa\DXtrade\Enums;

enum LimitType: string
{
    case LOTS = 'LOTS';
    case NOTIONAL_CURRENCY = 'NOTIONAL_CURRENCY';
}
