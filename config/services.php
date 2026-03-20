<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'api' => [
        'base_url' => env('API_BASE_URL'),
    ],

    'google_maps' => [
        'key' => env('GOOGLE_MAP_API'),
    ],

    'drivers_socket' => [
        'url' => env('SOCKET_URL', 'https://ws-dev.torettorecovery.ae'),
        'path' => env('SOCKET_PATH', '/socket.io'),
        'namespace' => env('SOCKET_NAMESPACE', ''),
        'room' => env('SOCKET_ROOM', ''),
        'join_event' => env('SOCKET_JOIN_EVENT', ''),
        'force_polling' => filter_var(env('SOCKET_FORCE_POLLING', true), FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? true,
    ],
];
