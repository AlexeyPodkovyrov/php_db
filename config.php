<?php
return [
    'db' => [
        'dsn' => 'mysql:
            host=localhost;
            dbname=taskapp;
            charset=utf8mb4',
        'user' => 'root',
        'pass' => '',
        'options' => '',                  
    ],
    'storage.file' => __DIR__ . '/storage/tasks.json',  
    'repository' => 'mysql'
];
?>