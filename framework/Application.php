<?php

namespace Framework;

class Application
{
    public function run($routes)
    {
        $routes = new Route($routes);
    }
}
