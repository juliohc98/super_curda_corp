<?php

$host = "localhost";
$db = "TaskManager";
$user = "postgres";
$pass = "20111998j";

$dsn = "pgsql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];