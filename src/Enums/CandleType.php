<?php

namespace AlexStewartJa\DXtrade\Enums;

enum CandleType: string
{
    case M1 = 'm';       // 1 minute
    case M5 = '5m';      // 5 minutes
    case M15 = '15m';    // 15 minutes
    case M30 = '30m';    // 30 minutes
    case H1 = 'h';       // 1 hour
    case H2 = '2h';      // 2 hours
    case H4 = '4h';      // 4 hours
    case D = 'd';       // Day
    case W = 'w';       // Week
    case MO = 'mo';     // Month
}
