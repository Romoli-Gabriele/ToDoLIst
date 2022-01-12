<?php
require "vendor/autoload.php";
$query = require "./core/bootstrap.php";
$key = "chiave di cifratura";
$router = new router();
require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());