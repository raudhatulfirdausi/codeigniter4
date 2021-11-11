<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('product_page');
    }
    public function display()
    {
        return view('product/product_display');
    }
    public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
    public function catalog()
    {
        $data = [
            'title' => 'Product Catalog',
            'brand' => 'Smartphone Xiaomi',
            'product' => ['Redmi Note 9', 'Redmi Note 9 Pro', 'Mi Note 10', 'Mi Note 10 Pro']
        ];
        return view('product_catalog', $data);
    }
}
