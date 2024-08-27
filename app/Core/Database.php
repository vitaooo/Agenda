<?php

namespace App\Core;

class Database
{
    private static $_pdo;
    private static $config;

    public function __construct()
    {
        if (self::$config === null) {
            $this->config = include 'config/app.php';
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_pdo)) {
            $config     = self::$config['db'];
            self::$_pdo = new \PDO(
                $config['driver'] . ':dbname=' . $config['database'] . ';host=' . $config['host'],
                $config['user'],
                $config['pass']
            );
        }

        return self::$_pdo;
    }
}
