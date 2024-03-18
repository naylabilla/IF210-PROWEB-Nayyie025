<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData()
    {
        $data = [
            ["id" => 1, "produk" => "Lily"],
            ["id" => 2, "produk" => "Melati"],
            ["id" => 3, "produk" => "Tulip"],
            ["id" => 4, "produk" => "Daisy"],
        ];
        return $data;
    }

    public function index()
    {
        $data = $this->getData();

        return view("list_product", compact("data"));
    }
}
