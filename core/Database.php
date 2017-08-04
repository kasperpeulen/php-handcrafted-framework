<?php

class Database
{
    private static $db = null;

    public static function get($db_config): PDO
    {
        if (static::$db === null) {
            return static::$db = self::makeConnection($db_config);
        } else {
            return static::$db;
        }
    }

    public static function makeConnection($db_config): PDO
    {
        try {
            $pdo = new PDO(
                $db_config['connection'] . ';dbname=' . $db_config['name'],
                $db_config['username'],
                $db_config['password'],
                $db_config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        return $pdo;
    }
}
