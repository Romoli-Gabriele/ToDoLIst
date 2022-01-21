<?php

$query = require "./core/bootstrap.php";
$router = new router();
$crypt = new Crypt();
require "routes.php";


require $router::load('routes.php')
->direct(Request::uri(), Request::method());