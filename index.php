<?php

$query = require "core/bootstrap.php";

$router = new router();
require "routes.php";

require $router->direct("about-colture");