<?php

namespace AlexStewartJa\DXtrade\Enums;

enum AccountEventType: string
{
    case LIQUIDATION = 'LIQUIDATION';
    case MARGIN_CALL = 'MARGIN_CALL';
}
