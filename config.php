<?php

return [

    "database"=>[
        "name"=>"todolist",
        "username"=>"root",
        "password"=>"root",
        "connection"=>"mysql:host=127.0.0.1",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
        "tableName"=>"tasks",
        "className"=>"task",
        "charset" => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
    ],
    "crypt"=>[
        
    ]
];