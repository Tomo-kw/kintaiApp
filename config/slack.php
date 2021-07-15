<?php

return [
    // Webhook URL
    'url' => env('SLACK_URL'),

    // チャンネル設定
    // 'default' => '#general',
    'default' => 'work',

    'channels' => [
        'work' => [
            'username' => '作業通知',
            'icon'     => ':face_with_rolling_eyes:',
            'channel'  => '#general',
        ],
        'error' => [
            'username' => 'エラー通知',
            'icon'     => ':scream:',
            'channel'  => 'notice-error',
        ],
    ],
];