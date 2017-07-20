<?php

namespace App\Http\Controllers;

use App\Home;
use App\Product;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $products = Product::limit(3)->select('id','image','name','description','price')->get();
        $blogs = Blog::limit(6)->select('id','title','category','image','content','author')->get();
        return view('welcome', compact('homes', 'products', 'blogs'));
    }

    public function uploadOriginal(Request $request)
    {
        $file = Input::file('image');
        $file->move('uploads', $file->getClientOriginalName());
        $filename = 'uploads/'.$file->getClientOriginalName();

        return view('img-result');
    }
}
