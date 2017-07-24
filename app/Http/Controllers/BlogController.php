<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(3);
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        return view('blog', compact('blogs', 'rel'));
    }

    public function getContent(Request $request, $id)
    {
        $content = Blog::find($id);
        return view('blog-content', compact('content'));
    }
}
