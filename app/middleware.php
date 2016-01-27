<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);


use \Slim\Middleware\HttpBasicAuthentication\AuthenticatorInterface;

$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => ["/kpi"],
    "realm" => "Protected",
    "users" => [
        "farolnet" => "293143",
        "benner" => "kpi#2016"
    ]
]));