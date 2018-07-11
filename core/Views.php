<?php

namespace Core;

class Views
{
    private $viewPath;
    private $layoutPath;
    private $extension = ".phtml";
    private $viewsPath = __DIR__ . "/../app/Views/";

    public function __construct($view, $layout)
    {
        $this->viewPath = str_replace('.', '/', $view);
        $this->layoutPath = str_replace('.', '/', $layout);
    }

    public function render()
    {
        if ($this->layoutPath) {
            return $this->layout();
        } else {
            return $this->content();
        }
    }

    protected function content()
    {
        if (file_exists("{$this->viewsPath}{$this->viewPath}{$this->extension}")) {
            return require_once "{$this->viewsPath}{$this->viewPath}{$this->extension}";
        } else {
            echo "Error: View {$this->viewPath} not found!";
        }
    }

    public function layout()
    {
        if (file_exists("{$this->viewsPath}{$this->layoutPath}{$this->extension}")) {
            return require_once "{$this->viewsPath}{$this->layoutPath}{$this->extension}";
        } else {
            echo "Error: Layout {$this->layoutPath} not found!";
        }
    }
}
