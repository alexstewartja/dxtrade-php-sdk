<?php

namespace AlexStewartJa\DXtrade\Enums;

enum MarginRateType: string
{
    case FLAT = 'FLAT';
    case TIERED = 'TIERED';
    case TRADER_SELECTED = 'TRADER_SELECTED';
}
