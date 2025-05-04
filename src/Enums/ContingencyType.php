<?php

namespace AlexStewartJa\DXtrade\Enums;

enum ContingencyType: string
{
    case OCO = 'OCO';
    case IF_THEN = 'IF-THEN';
}
