<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Mobil'],
            ['id' => 2, 'produk' => 'Motor'],
            ['id' => 3, 'produk' => 'Sepeda'],
        ];

        return view('list_product', ['data' => $data]);
    }
}
