<?php

declare(strict_types=1);

return [
    'base_url' => env('TAWHUB_BASE_URL', 'https://tawhub.com/api/create-message'),
    'app_key' => env('TAWHUB_APP_KEY'),
    'auth_key' => env('TAWHUB_AUTH_KEY'),
    'sandbox' => env('TAWHUB_SANDBOX', false),
    'timeout' => (int) env('TAWHUB_TIMEOUT', 30),
    'retries' => [
        'times' => (int) env('TAWHUB_RETRY_TIMES', 0),
        'sleep_ms' => (int) env('TAWHUB_RETRY_SLEEP_MS', 250),
        'backoff' => env('TAWHUB_RETRY_BACKOFF', 'fixed'),
    ],
    'logging' => [
        'enabled' => env('TAWHUB_LOGGING_ENABLED', false),
        'channel' => env('TAWHUB_LOG_CHANNEL'),
        'include_payload' => env('TAWHUB_LOG_INCLUDE_PAYLOAD', false),
    ],
];

