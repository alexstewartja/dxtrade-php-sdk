<?php

namespace AlexStewartJa\DXtrade\Enums;

enum PriceLink: string
{
    case TRIGGERED_STOP = 'TRIGGERED_STOP';
    case TRIGGERED_LIMIT = 'TRIGGERED_LIMIT';
}
