<?php

declare(strict_types=1);

return [
    'connection' => [
        'host' => env('AMQP_HOST', 'rabbitmq'),
        'port' => env('AMQP_PORT', 5672),
        'user' => env('AMQP_USER', 'guest'),
        'pass' => env('AMQP_PASS', 'guest'),
        'vhost' => env('AMQP_VHOST', 'local'),
        'tls' => env('AMQP_TLS', false),
    ],
];
