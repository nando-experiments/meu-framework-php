<?php

if (!session_id()) {
    session_start();
}

require(__DIR__.'/../vendor/autoload.php');

$routes = require_once __DIR__ . "/../app/routes.php";

$app = new \Framework\Application();
$app->run($routes);
