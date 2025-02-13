<?php
return [
    'host'  => getenv('DB_HOST') ?: '',
    'port'  => getenv('DB_PORT') ?: '',
    'name'  => getenv('DB_NAME') ?: 'app/database/communication.db',
    'user'  => getenv('DB_USER') ?: '',
    'pass'  => getenv('DB_PASS') ?: '',
    'type'  => getenv('DB_TYPE') ?: 'sqlite',
    'prep'  => getenv('DB_PREP') ?: '1'
];
