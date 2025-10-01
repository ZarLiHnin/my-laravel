<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:3000',               // ローカル開発用
        'https://my-next-app.vercel.app'       // Next.js 本番URL
    ],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,          // Next.js からクッキー不要なら false に
];
