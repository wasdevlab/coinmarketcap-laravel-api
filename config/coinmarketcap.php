<?php

return [
    'api_key' => env('COINMARKETCAP_API_KEY'),
    'base_uri' => env('COINMARKETCAP_BASE_URI', 'https://pro-api.coinmarketcap.com'),
    'timeout' => (int) env('COINMARKETCAP_TIMEOUT', 10),
    'symbol' => strtoupper(env('COINMARKETCAP_SYMBOL', 'BTC')),
    'cache_ttl' => (int) env('COINMARKETCAP_CACHE_TTL', 300),
];
