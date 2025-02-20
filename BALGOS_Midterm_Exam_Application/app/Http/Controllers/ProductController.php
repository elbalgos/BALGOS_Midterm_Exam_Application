<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showGadgets()
    {
        $gadgets = [
            'Smartphone',
            'Laptop',
            'Smartwatch',
            'Tablet',
            'Wireless Earbuds',
        ];

        return view('gadgets', ['products' => $gadgets]);
    }
}
