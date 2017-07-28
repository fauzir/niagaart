<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use App\BlogTag;
use App\Service;
use App\Social;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $keyword = $request->get('search');
        $perPage = 3;

        if (!empty($keyword)) {
            $blogs = Blog::where('title', 'LIKE', "%$keyword%")
        ->orWhere('category', 'LIKE', "%$keyword%")
        ->orWhere('author', 'LIKE', "%$keyword%")
        ->orderBy('created_at', 'desc')
        ->paginate($perPage);
            $categories = BlogTag::all();
            $count = 0;//BlogTag::find(1)->tag_blog->count();
            $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
            $array = array();
            foreach ($blogs as $blog) {
              $tags = Blog::find($blog->id)->tag_blog;
              foreach ($tags as $tag) {
                $array[] = $tag->tag;
              }
            }
            $rel = implode (",", $array);
            return view('blog', compact('servicefooters', 'blogs', 'categories', 'count', 'populars', 'rel'));
        } else {
            $blogs = Blog::with('tag_blog')->orderBy('created_at', 'desc')->paginate($perPage);
            // Blog::orderBy('created_at', 'desc')->paginate($perPage);
            $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
            $count = 0;//BlogTag::find($request->id)->tag_blog->count();
            $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
            $socials = Social::where('active', 'yes')->get();
            return view('blog', compact('blogs', 'servicefooters', 'categories', 'count', 'populars', 'socials'));
        }
    }

    public function getContent(Request $request, $slug)
    {
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        Blog::where('slug', $slug)->increment('visitor_count', 1);
        $blogs = Blog::all();
        $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
        $count = 0;
        $contents = Blog::where('slug', $slug)->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        $socials = Social::where('active', 'yes')->get();
        return view('blog-content', compact('servicefooters', 'contents', 'categories', 'count', 'rel', 'socials'));
    }

    public function getCategory(Request $request, $slug)
    {
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $finds = BlogTag::where('slug', $slug)->get();
        foreach ($finds as $find) {
            $blogs = BlogTag::find($find->id)->tag_blog;
        }

        $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
        $count = 0;
        $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        $socials = Social::where('active', 'yes')->get();
        return view('blog-category', compact('servicefooters', 'blogs', 'categories', 'count', 'populars', 'rel', 'socials'));
    }
}
