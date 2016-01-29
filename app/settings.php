<?php

$env = require __DIR__ . '/env.php';

return [
    'settings' => [
        'displayErrorDetails' => $env['displayErrorDetails'],
        'determineRouteBeforeAppMiddleware' => $env['determineRouteBeforeAppMiddleware'],

        // View settings
        'view' => $env['view'],

        // Monolog settings
        'logger' => $env['logger'],

        //Doctrine
        'doctrine' => $env['doctrine']
    ],
];
