<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $category = "Mouse";
        $button = '<button>Buy Now</button>';
        return view('home', [
            'product_name' => 'Logitech G502 Hero',
            'category' => $category,
            'button' => $button
        ]);
    }
}
