<?php

App::bind("config", $config = require "config.php");


App::bind("database",  new queryBuilder(
    Connection::make($config["database"])
));
