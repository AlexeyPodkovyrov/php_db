<?php

return [
    'db' => [
        'user' => 'root',
        'dsn' => 'mysql:host=localhost;dbname=taskapp;charset=utf8mb4',
        'pass' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    ],
    'storage' => __DIR__ . '/storage/tasks.json',
    'repository' => 'file' // file (задачи сохраняются в storage/tasks.json) / mysql (задачи сохраняются в таблицу tasks базы данных tasksapp)
];

?>