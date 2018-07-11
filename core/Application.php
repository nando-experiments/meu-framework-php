<?php

namespace Core;

class Application
{
    public function run($routes)
    {
        $routes = new Route($routes);
    }
}
