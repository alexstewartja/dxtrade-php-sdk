<?php

namespace AlexStewartJa\DXtrade\Enums;

enum CurrencyType: string
{
    case FIAT = 'FIAT';
    case CRYPTO_CURRENCY = 'CRYPTO_CURRENCY';
    case CRYPTO_TOKEN = 'CRYPTO_TOKEN';
}
