<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(3);
        return view('blog', compact('blogs'));
    }

    public function getContent(Request $request, $id)
    {
        $content = Blog::find($id);
        return view('blog-content', compact('content'));
    }
}
