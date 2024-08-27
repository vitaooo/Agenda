<?php

namespace App\Core;

class Database
{
    private static $_pdo;

    public static function getInstance()
    {
        $config = Config::getInstance();
        if (!isset(self::$_pdo)) {
            self::$_pdo = new \PDO(
                $config->get('DB_DRIVER') . ':dbname=' . $config->get('DB_DATABASE') . ';host=' . $config->get('DB_HOST'),
                $config->get('DB_USER'),
                $config->get('DB_PASS')
            );
        }

        return self::$_pdo;
    }
}
