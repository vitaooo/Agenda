<?php

namespace App\Core;

use Dotenv\Dotenv;

class Config
{
    private static $instance = null;

    private function __construct()
    {
        // Carrega o arquivo .env
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get($key)
    {
        return $_ENV[$key] ?? null; // Usa $_ENV para acessar as variáveis carregadas
    }
}
