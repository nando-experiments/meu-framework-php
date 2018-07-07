<?php

namespace App\Controllers;

use Framework\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->renderView('home/index', 'layouts/default');
    }

    public function home()
    {
        $this->renderView('home/index', 'layouts/default');
    }
}
