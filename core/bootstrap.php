<?php

if (!defined('__DS__')) {
    define('__DS__', DIRECTORY_SEPARATOR);
}

if (!defined('__BASE_PATH__')) {
    define('__BASE_PATH__', __DIR__.__DS__.'..');
}

if (!defined('__CORE_PATH__')) {
    define('__CORE_PATH__', __BASE_PATH__.__DS__.'core');
}

if (!defined('__APP_PATH__')) {
    define('__APP_PATH__', __BASE_PATH__.__DS__.'app');
}

// require composer autoload
require_once __BASE_PATH__.__DS__.'vendor'.__DS__.'autoload.php';

$routes = require_once __APP_PATH__.__DS__.'routes.php';

return new \Core\Application();
