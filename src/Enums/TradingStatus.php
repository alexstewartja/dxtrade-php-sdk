<?php

namespace AlexStewartJa\DXtrade\Enums;

enum TradingStatus: string
{
    case FULL = 'FULL';
    case CLOSE_ONLY = 'CLOSE_ONLY';
    case NO = 'NO';
}
