<?php

namespace Core;

abstract class Controller
{
    protected $view;
    protected $errors;
    protected $inputs;
    protected $success;
    private $viewPath;
    private $layoutPath;
    private $extension = ".phtml";
    private $viewsPath = __DIR__ . "/../app/Views/";

    public function __construct()
    {
        $this->view = new \stdClass;

        if (Session::get('errors')) {
            $this->errors = Session::get('errors');
            Session::destroy('errors');
        }

        if (Session::get('inputs')) {
            $this->inputs = Session::get('inputs');
            Session::destroy('inputs');
        }

        if (Session::get('success')) {
            $this->success = Session::get('success');
            Session::destroy('success');
        }
    }

    protected function renderView($viewPath, $layoutPath = null)
    {
        $view = new Views($viewPath, $layoutPath);
        $view->render();
    }
}
