<?php
session_start();
$query = require "./core/bootstrap.php";
$router = new router();
$crypt = $_SESSION["crypt"];
if(!isset($crypt)){
    $crypt = new Crypt();
    $_SESSION["crypt"] = $crypt; 
}

require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());