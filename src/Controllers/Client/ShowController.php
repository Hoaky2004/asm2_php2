<?php

namespace Nguyenbaky\Oop\Controllers\Client;

use Nguyenbaky\Oop\Commons\Controller;
use Nguyenbaky\Oop\Models\Product;

class UserController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function show($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewAdmin('products.show', [
            'product' => $product
        ]);
    }
}
?>