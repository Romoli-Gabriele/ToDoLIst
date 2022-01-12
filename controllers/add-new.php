<?php 

$database= App::get("config")["database"];


$newTask = [
    "descrizione"=>Crypt::encrypt($_POST["descrizione"]), 
    "terminata"=>"false"
];

App::get("database")->insertTask($database["tableName"], $newTask);

$tasks = App::get("database")->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";

