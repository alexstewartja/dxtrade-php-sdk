<?php

namespace AlexStewartJa\DXtrade\Enums;

enum CategoryDomain: string
{
    case INTERNAL = 'Internal';
    case COMMISSIONS = 'Commissions';
    case AUTO_EXECUTION = 'AutoExecution';
    case LIMITS = 'Limits';
    case FINANCING = 'Financing';
    case MARGINING = 'Margining';
    case TRADING = 'Trading';
    case SPREADS = 'Spreads';
    case IMMEDIATE_CONVERSION = 'immediateConversion';
    case STAKE_TYPE = 'STAKE_TYPE';
    case PROPRIETARY_TRADING = 'ProprietaryTrading';
}
