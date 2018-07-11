<?php

namespace Core;

class Container
{
    public static function newController($contoller)
    {
        $objContoller = "App\\Controllers\\" . $contoller;
        return new $objContoller;
    }

    public static function getModel($model)
    {
        $objModel = "\\App\\Models\\" . $model;
        return new $objModel(DataBase::getDatabase());
    }

    public static function pageNotFound()
    {
        $view = new Views('errors/404', 'layouts/default');
        $view->render();
    }
}
