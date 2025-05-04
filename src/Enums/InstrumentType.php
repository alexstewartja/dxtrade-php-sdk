<?php

namespace AlexStewartJa\DXtrade\Enums;

enum InstrumentType: string
{
    case CURRENCY = 'CURRENCY';
    case STOCK = 'STOCK';
    case FOREX = 'FOREX';
    case FUTURES = 'FUTURES';
    case PRODUCT = 'PRODUCT';
    case INDEX = 'INDEX';
    case CFD = 'CFD';
    case OPTION = 'OPTION';
    case SPREAD_BET = 'SPREAD_BET';
    case CFD_FUTURES = 'CFD_FUTURES';
    case SB_FUTURES = 'SB_FUTURES';
    case FX_OPTION = 'FX_OPTION';
    case FX_FORWARD = 'FX_FORWARD';
    case CFD_OPTION = 'CFD_OPTION';
    case SB_OPTION = 'SB_OPTION';
    case CFD_STOCK = 'CFD_STOCK';
    case SB_STOCK = 'SB_STOCK';
    case CFD_FOREX = 'CFD_FOREX';
    case SB_FOREX = 'SB_FOREX';
    case SPREAD = 'SPREAD';
    case WARRANT = 'WARRANT';
    case ETF = 'ETF';
}
