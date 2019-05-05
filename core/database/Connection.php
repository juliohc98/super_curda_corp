<?php

class Connection {
    public static function make($dsn, $user, $pass, $options)
    {
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
