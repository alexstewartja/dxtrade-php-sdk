<?php

namespace AlexStewartJa\DXtrade\Enums;

enum CashTransactionType: string
{
    case COMMISSION = 'COMMISSION';
    case FINANCING = 'FINANCING';
    case DEPOSIT = 'DEPOSIT';
    case WITHDRAWAL = 'WITHDRAWAL';
    case COST = 'COST';
    case SETTLEMENT = 'SETTLEMENT';
    case ADJUSTMENT = 'ADJUSTMENT';
    case EX_DIVIDEND = 'EX_DIVIDEND';
    case REBATE = 'REBATE';
    case NEGATIVE_BALANCE_CORRECTION = 'NEGATIVE_BALANCE_CORRECTION';
}
