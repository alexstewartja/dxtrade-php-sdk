<?php

namespace AlexStewartJa\DXtrade\Enums;

enum BrokerType: string
{
    case TRADING_FIRM = 'TRADING_FIRM';
    case EXEC_BROKER = 'EXEC_BROKER';
    case SUP_BROKER = 'SUP_BROKER';
    case OMNIBUS = 'OMNIBUS';
}
