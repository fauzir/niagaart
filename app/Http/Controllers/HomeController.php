<?php

namespace App\Http\Controllers;

use App\Home;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $products = Product::all();
        return view('welcome', compact('homes', 'products'));
    }
}
