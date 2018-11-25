<?php

return [
    'alipay' => [
        'app_id'         => env('ALIPAY_APP_ID', ''),
        'ali_public_key' => env('ALIPAY_ALI_PUBLIC_KEY', ''),
        'private_key'    => env('ALIPAY_PRIVATE_KEY', ''),
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => env('WECHAT_APP_ID', ''),
        'mch_id'      => env('WECHAT_MCH_ID', ''),
        'key'         => env('WECHAT_KEY', ''),
        'cert_client' => env('WECHAT_CERT_CLIENT', ''),
        'cert_key'    => env('WECHAT_CERT_KEY', ''),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];