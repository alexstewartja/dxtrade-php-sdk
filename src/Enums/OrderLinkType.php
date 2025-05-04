<?php

namespace AlexStewartJa\DXtrade\Enums;

enum OrderLinkType: string
{
    case PARENT = 'PARENT';
    case CHILD = 'CHILD';
    case OCO = 'OCO';
}
