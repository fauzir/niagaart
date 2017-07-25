<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 3;

        if (!empty($keyword)) {
            $blogs = Blog::where('title', 'LIKE', "%$keyword%")
        ->orWhere('category', 'LIKE', "%$keyword%")
        ->orWhere('author', 'LIKE', "%$keyword%")
        ->orderBy('created_at', 'desc')
        ->paginate($perPage);
            $categories = BlogTag::all();
            $count = BlogTag::find(1)->tag_blog->count();
            $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
            $array = array();
            foreach ($blogs as $blog) {
              $tags = Blog::find($blog->id)->tag_blog;
              foreach ($tags as $tag) {
                $array[] = $tag->tag;
              }
            }
            $rel = implode (",", $array);
            return view('blog', compact('blogs', 'categories', 'count', 'populars', 'rel'));
        } else {
            $blogs = Blog::orderBy('created_at', 'desc')->paginate($perPage);
            $categories = BlogTag::all();
            $count = BlogTag::find(1)->tag_blog->count();
            $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
            $array = array();
            foreach ($blogs as $blog) {
              $tags = Blog::find($blog->id)->tag_blog;
              foreach ($tags as $tag) {
                $array[] = $tag->tag;
              }
            }
            $rel = implode (",", $array);
            return view('blog', compact('blogs', 'categories', 'count', 'populars', 'rel'));
        }
    }

    public function getContent(Request $request, $id)
    {
        Blog::find($id)->increment('visitor_count', 1);
        $blogs = Blog::all();
        $categories = BlogTag::all();
        $count = BlogTag::find(1)->tag_blog->count();
        $content = Blog::find($id);
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        return view('blog-content', compact('content', 'categories', 'count', 'rel'));
    }

    public function getCategory(Request $request, $id)
    {
        $blogs = BlogTag::find($id)->tag_blog;
        $categories = BlogTag::all();
        $count = BlogTag::find(1)->tag_blog->count();
        $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        return view('blog-category', compact('blogs', 'categories', 'count', 'populars', 'rel'));
    }
}
