<?php

namespace AlexStewartJa\DXtrade\Enums;

enum TimeInForce: string
{
    case DAY = 'DAY';
    case GTC = 'GTC'; // Good Till Canceled
    case IOC = 'IOC'; // Immediate or Cancel
    case FOK = 'FOK'; // Fill or Kill
    case GTD = 'GTD'; // Good Till Date
}
