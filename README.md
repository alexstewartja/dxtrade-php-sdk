<center><img src="https://i.ibb.co/mCpQg1Wp/dxtrade-php-sdk-cover.png" alt="DXtrade PHP SDK"></center>

# DXtrade PHP SDK

[![Latest Stable Version](http://poser.pugx.org/alexstewartja/dxtrade-php-sdk/v)](https://packagist.org/packages/alexstewartja/dxtrade-php-sdk)
[![Total Downloads](http://poser.pugx.org/alexstewartja/dxtrade-php-sdk/downloads)](https://packagist.org/packages/alexstewartja/dxtrade-php-sdk)
[![License](http://poser.pugx.org/alexstewartja/dxtrade-php-sdk/license)](https://packagist.org/packages/alexstewartja/dxtrade-php-sdk)

![Tests Status](https://img.shields.io/github/actions/workflow/status/alexstewartja/dxtrade-php-sdk/run-tests.yml?label=tests)
![Static Analysis](https://img.shields.io/github/actions/workflow/status/alexstewartja/dxtrade-php-sdk/fix-php-code-style-issues.yml?label=code%20style)

[![PHP Version Required](http://poser.pugx.org/alexstewartja/dxtrade-php-sdk/require/php)](https://packagist.org/packages/alexstewartja/dxtrade-php-sdk)

[![Buy Me A Coffee](https://img.shields.io/badge/Buy_Me-A_Coffee-orange?logo=buy-me-a-coffee)](https://buymeacoffee.com/alexstewartja)

PHP SDK for DXtrade's Administrative and Trading REST API endpoints.

## Installation

You can install the package via composer:

```bash
composer require alexstewartja/dxtrade-php-sdk
```

## Usage Examples

### Client Setup

First, initialize the DXtrade client:

```php
// Create a client in the demo environment
$client = new DXtradeClient(Env::BASE_URL_DEMO);
// Or in a custom/production environment
$prodBaseUrl = 'https://your-production-url.com';
$client = new DXtradeClient($prodBaseUrl);

// With custom Guzzle options
$client = new DXtradeClient(
    $prodBaseUrl,
    null,
    [
        'timeout' => 30,
        'verify' => false,
    ]
);

// If you already have a session token
$client = new DXtradeClient(
    $prodBaseUrl,
    'your-session-token'
);
```

### Administrative API

The Administrative API provides access to account management, user management, and other administrative functions.

```php
// Authentication
$loginRequest = (new LoginRequest())
    ->setUsername('alex')
    ->setDomain('uptrendprop')
    ->setPassword('password123!');
$loginResult = $client->administrative()->authentication()->login($loginRequest);
$sessionToken = $loginResult->getSessionToken(); // Get the session token
// Store the session token for future clients/requests
// OR
// Set the session token on this client
$client->setSessionToken($sessionToken);

// Accounts
$accounts = $client->administrative()->accounts()->getAccounts(); // Get all accounts
$account = $client->administrative()->accounts()->getAccount('clearing_code', 'account_code'); // Get a specific account

// Users
$users = $client->administrative()->users()->getUsers();

// Single Sign-On (SSO)
$ssoToken = $client
    ->administrative()
    ->sso()
    ->generateTokenForm('alex', 'uptrendprop'); // Generate SSO token for a user via HTTP POST

// Brokers
$brokers = $client->administrative()->brokers()->getBrokers();

// Cash Transfers
$adjustment = (new Adjustment())
    ->setAmount(-50.0)
    ->setCurrency('USD')
    ->setDescription('Test debit adjustment');
$transfer = $client->administrative()->cashTransfers()->createAdjustment(
    'clearing_code',
    'account_code',
    uniqid('adj-'),
    $adjustment
);

// Categories
$categories = $client->administrative()->categories()->getCategories();
```

### Trading API

The Trading API provides access to trading operations, market data, and order management.

```php
// Authentication
$loginRequest = (new LoginRequest())
    ->setUsername('alex')
    ->setDomain('uptrendprop')
    ->setPassword('password123!');
$loginResponse = $client->trading()->authentication()->login($loginRequest);

// Accounts
$accounts = $client->trading()->accounts()->getAccounts(); // Get all accounts
$eodMetrics = $client
    ->trading()
    ->accounts()
    ->getEodMetricsQuery('2025-04-21', 'uptrendprop:alex,uptrendprop:staff'); // Get End-Of-Day metrics
$portfolios = $client
    ->trading()
    ->accounts()
    ->getAccountPortfolios('uptrendprop:alex', 'account-etag-123'); // Get account portfolios

// Instruments
$instruments = $client->trading()->instruments()->getByType(InstrumentType::CFD_FUTURES); // Get all instruments by type
$instrument = $client->trading()->instruments()->getBySymbol('EUR/USD'); // Get instrument(s) by symbol

// Market Data
$marketEventType = (new MarketEventRequestType())
    ->setType(MarketEventType::CANDLE->value)
    ->setCandleType(CandleType::H4->value)
    ->setFromTime((new DXtradeDateTime('-3 months')))
    ->setToTime((new DXtradeDateTime('now')));
$marketDataRequest = (new MarketDataRequest())
    ->setAccount('uptrendprop:alex')
    ->setSymbols(['EUR/USD'])
    ->setEventTypes([$marketEventType]);
// Get last 3 months of 4-hour candles for EUR/USD
$candles = $client->trading()->marketData()->getMarketData($marketDataRequest);

// Orders
$openOrders = $client->trading()->orders()->getOpenOrders('uptrendprop:alex'); // Get all open orders for an account
// Place limit-short (sell) order of 100 units on EUR/USD if it drops to the $1.08 USD price-point
$orderCode = uniqid('ord-');
$orderRequest = (new SingleOrderRequest())
    ->setOrderCode(uniqid('ord-'))
    ->setType(OrderType::LIMIT->value)
    ->setInstrument('EUR/USD')
    ->setQuantity(100.00)
    ->setSide(OrderSide::SELL->value)
    ->setLimitPrice(1.08);
$limitOrderResponse = $client->trading()->orders()->createOrder('uptrendprop:alex', $orderRequest);
// Cancel an order
$cancelledOrderResponse = $client->trading()->orders()->cancelOrder('uptrendprop:alex', $orderCode);
$orderIsCancelled = ($cancelledOrderResponse->getOrderId() === $limitOrderResponse->getOrderId());

// Conversions
$conversionRate = $client->trading()->conversion()->getConversionRate('USD', 'EUR');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

A [Lando](https://lando.dev/) file is included in the repo to get up and running quickly:

```bash
lando start
```

Please see [CONTRIBUTING](CONTRIBUTING.md) for more details.

## Security

If you discover any security-related issues, please email 
[dxtrade@alexstewartja.com](mailto:dxtrade@alexstewartja.com?Subject=DXtrade%20PHP%20SDK) instead of using the issue 
tracker.

## Credits

- [Alex Stewart](https://github.com/alexstewartja)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
