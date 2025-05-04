<?php

namespace AlexStewartJa\DXtrade;

interface Env
{
    public const BASE_URL_DEMO = 'https://demo.dx.trade';

    public const BASE_PATH_TRADING = '/dxsca-web';

    public const BASE_PATH_ADMINISTRATIVE = '/dxweb/rest';

    public const ROOT_BROKER_CODE = 'root_broker';

    public const DATE_FORMAT = 'Y-m-d\Z';

    public const DATETIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';
}
