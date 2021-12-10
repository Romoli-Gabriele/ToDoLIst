<?php
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "core/task.php";
require "core/router.php";
require "Request.php";


$config = require "config.php";


return new queryBuilder(
    Connection::make($config["database"])
);
