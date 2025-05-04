<?php

namespace AlexStewartJa\DXtrade\Enums;

enum MarketEventType: string
{
    case QUOTE = 'Quote';
    case CANDLE = 'Candle';
}
