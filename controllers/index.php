<?php 

$config = require "config.php";
$database= $config["database"];
$tasks = $query->selectAll($database["tableName"], $database["className"]);

require "views/index.view.php";
