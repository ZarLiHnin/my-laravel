return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:3000', // ローカル開発用
        'https://my-next-app.vercel.app' // VercelのNext.js本番URL
    ],
    'allowed_headers' => ['*'],
    'supports_credentials' => true,
];
