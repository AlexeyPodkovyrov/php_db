<?php
return [
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=taskapp;cahrset=utf8mb4',
        'user' => 'root',
        'pass' => '',
        'options' => [ PDO::ATTR_ERMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSC,
                      PDO::ATTR_EMULATE_PREPARES => false
    ]
],
'storage' => [
    'file' => __DIR__ . '/storage/tasks.json'
],
'repository' => 'mysql'
];
?>