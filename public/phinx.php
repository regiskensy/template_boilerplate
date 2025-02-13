<?php
$paths = [
    'migrations' => 'app/database/migrations',
    'seeds' => 'app/database/seeds'
];

return [
    'paths' => $paths,
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'dev',
        'dev' => [
            'adapter' => 'pgsql',
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS'),
            'port' => getenv('DB_PORT'),
            'charset' => 'utf8',
        ]
    ]
]; 