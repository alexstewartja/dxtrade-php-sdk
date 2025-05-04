<?php

namespace AlexStewartJa\DXtrade\Enums;

enum ClientStatus: string
{
    case ONLINE = 'ONLINE';
    case OFFLINE = 'OFFLINE';
    case DISABLED = 'DISABLED';
}
