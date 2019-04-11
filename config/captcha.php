<?php

return [
    'secret' => env('CAPTCHA_SECRET', 'default_secret'),
    'sitekey' => env('CAPTCHA_SITEKEY', 'default_sitekey'),
    'options' => [
        'timeout' => 2.0,
    ],
];
