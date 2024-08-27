<?php

return (object) [
    'base_url' => '/agenda/public',
    'db'       => [
        'driver'   => 'mysql',
        'host'     => 'localhost',
        'database' => 'agenda',
        'user'     => 'root',
        'pass'     => '',
    ],
    'error_controller' => 'ErrorController',
    'default_action'   => 'index',
];
