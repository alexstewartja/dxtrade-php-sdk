<?php

namespace AlexStewartJa\DXtrade\Enums;

enum AccountType: string
{
    case CLIENT = 'CLIENT';
    case OFFSET = 'OFFSET';
    case REFERENCE = 'REFERENCE';
}
