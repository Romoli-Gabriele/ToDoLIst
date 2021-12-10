<?php

return [

    "database"=>[
        "name"=>"todolist",
        "username"=>"root",
        "password"=>"root",
        "connection"=>"mysql:host=localhost",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
        "tableName"=>"task",
        "className"=>"task",
    ],

];