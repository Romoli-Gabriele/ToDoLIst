<?php

return [

    "database"=>[
        "name"=>"ToDO",
        "username"=>"root",
        "password"=>"password",
        "connection"=>"mysql:host=127.0.0.1",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
        "tableName"=>"task",
        "className"=>"task",
    ],

];