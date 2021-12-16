<?php 
$config = require "config.php";
$database= $config["database"];

if(isset($_POST["terminata"])){
    $terminata = 1;
}else{
    $terminata = 0;
}
$newTask = [
    "descrizione"=>$_POST["descrizione"], 
    "terminata"=>$terminata
];

$query->insertTask($database["tableName"], $newTask);

$tasks = $query->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";

