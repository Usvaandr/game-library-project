<?php
// all private configurations are stored in this one file.

return [
    'database' => [
        'name' => 'library',
        'username' => 'root',
        'password' => 'Password1?',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];

//'options' gives an option to throw errors/exceptions.
