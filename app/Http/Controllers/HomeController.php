<?php

namespace App\Http\Controllers;

use App\Home;
use App\Product;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $products = Product::limit(3)->select('id','image','name','description','price')->get();
        $blogs = Blog::limit(6)->select('id','title','category','image','content','author')->get();
        return view('welcome', compact('homes', 'products', 'blogs'));
    }
}
