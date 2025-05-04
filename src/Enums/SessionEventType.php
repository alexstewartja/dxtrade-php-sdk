<?php

namespace AlexStewartJa\DXtrade\Enums;

enum SessionEventType: string
{
    case SESSION_OPEN = 'SESSION_OPEN';
    case SESSION_CLOSE = 'SESSION_CLOSE';
}
