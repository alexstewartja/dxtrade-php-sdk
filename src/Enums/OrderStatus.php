<?php

namespace AlexStewartJa\DXtrade\Enums;

enum OrderStatus: string
{
    case ACCEPTED = 'ACCEPTED';
    case WORKING = 'WORKING';
    case CANCELED = 'CANCELED';
    case COMPLETED = 'COMPLETED';
    case EXPIRED = 'EXPIRED';
    case REJECTED = 'REJECTED';
}
