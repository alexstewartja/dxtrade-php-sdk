<?php

namespace AlexStewartJa\DXtrade\Enums;

enum AccountStatus: string
{
    case FULL_TRADING = 'FULL_TRADING';
    case CLOSE_ONLY = 'CLOSE_ONLY';
    case NO_TRADING = 'NO_TRADING';
    case TERMINATED = 'TERMINATED';
    case EXPIRED = 'EXPIRED';
}
