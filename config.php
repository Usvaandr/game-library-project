<?php

// all private configurations are stored in this one file.

return [
    'database' => [
        'name' => 'library',
        'username' => 'root',
        'password' => 'Password1?',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
