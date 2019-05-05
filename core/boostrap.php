<?php

require 'config.php';
require 'core/Request.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$query = new QueryBuilder(
    Connection::make($dsn, $user, $pass, $options)
);