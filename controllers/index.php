<?php 

$database= App::get("config")["database"];
$tasks = App::get("database")->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";
