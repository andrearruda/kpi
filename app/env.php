<?php
return [
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,

    'view' => [
        'template_path' => __DIR__ . '/templates',
        'twig' => [
            'cache' => __DIR__ . '/../cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],
    ],

    'logger' => [
        'name' => 'app',
        'path' => __DIR__ . '/../log/app.log',
    ],

    'doctrine' => [
        'meta' => [
            'entity_path' => [
                'app/src/Entity'
            ],
            'auto_generate_proxies' => true,
            'proxy_dir' =>  __DIR__.'/../cache/proxies',
            'cache' => null,
        ],
        'connection' => [
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'dbname'   => 'benner_kpi',
            'user'     => 'root',
            'password' => '',
            'driverOptions' => [
                1002 => 'SET NAMES utf8'
            ]
        ]
    ]
];