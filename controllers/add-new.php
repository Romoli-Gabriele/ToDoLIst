<?php 

$database= App::get("config")["database"];

if(isset($_POST["terminata"])){
    $terminata = 1;
}else{
    $terminata = 0;
}
$newTask = [
    "descrizione"=>$_POST["descrizione"], 
    "terminata"=>$terminata
];

App::get("database")->insertTask($database["tableName"], $newTask);

$tasks = App::get("database")->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";

