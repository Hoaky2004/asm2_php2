<?php

namespace Nguyenbaky\Oop\Controllers\Client;

use Nguyenbaky\Oop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Nguyễn Bá Kỳ';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}