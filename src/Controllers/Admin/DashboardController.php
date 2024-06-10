<?php

namespace Nguyenbaky\Oop\Controllers\Admin;

use Nguyenbaky\Oop\Commons\Controller;

use Nguyenbaky\Oop\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
