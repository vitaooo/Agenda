<?php

namespace App\Core;

class Request
{
    public static function getUrl()
    {
        $config = Config::getInstance();
        $url    = filter_input(INPUT_GET, 'request') ?? '';
        $url    = str_replace($config->get('BASE_DIR'), '', $url);

        return '/' . $url;
    }

    public static function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
