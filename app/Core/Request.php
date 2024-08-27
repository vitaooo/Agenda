<?php

namespace App\Core;

class Request
{
    private static $config;

    public function __construct()
    {
        self::$config = include 'config/app.php';
    }

    public static function getUrl()
    {
        $url = filter_input(INPUT_GET, 'request');
        $url = str_replace(self::$config['base_url'], '', $url);

        return '/' . $url;
    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
