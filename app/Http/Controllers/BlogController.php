<?php

namespace App\Http\Controllers;

use App;
use DB;
use App\Blog;
use App\BlogTag;
use App\Contact;
use App\Service;
use App\Social;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            App::setLocale($request->locale);
            $blogs = Blog::with('tag_blog')->where('title', 'LIKE', "%$keyword%")
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
            return view('blog', compact('servicefooters', 'blogs', 'categories', 'count', 'populars', 'socials', 'contact'));
        } else {
            App::setLocale($request->locale);
            if (App::isLocale('en')) {
                $blogs = Blog::with('tag_blog')->where('lang', 'en')->orderBy('created_at', 'desc')->paginate($perPage);
                $populars = Blog::limit(3)->where('lang', 'en')->orderBy('visitor_count', 'desc')->get();
            } elseif (App::isLocale('id')) {
                $blogs = Blog::with('tag_blog')->where('lang', 'id')->orderBy('created_at', 'desc')->paginate($perPage);
                $populars = Blog::limit(3)->where('lang', 'id')->orderBy('visitor_count', 'desc')->get();
            }
            $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
            return view('blog', compact('blogs', 'servicefooters', 'categories', 'populars', 'socials', 'contact'));
        }
    }

    public function getContent(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        Blog::where('slug', $request->slug)->increment('visitor_count', 1);
        $blogs = Blog::all();
        $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
        $contents = Blog::where('slug', $request->slug)->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        return view('blog-content', compact('servicefooters', 'contents', 'categories', 'rel', 'socials', 'contact'));
    }

    public function getCategory(Request $request, $slug)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        $finds = BlogTag::where('slug', $request->slug)->get();
        foreach ($finds as $find) {
            $blogs = BlogTag::find($find->id)->tag_blog;
        }

        $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
        $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        return view('blog-category', compact('servicefooters', 'blogs', 'categories', 'populars', 'rel', 'socials', 'contact'));
    }

    public function getFeed()
    {
        $feed = App::make("feed");

        $feed->setCache(60, 'laravelFeedKey');

        if (!$feed->isCached())
        {
           $posts = DB::table('blogs')->orderBy('created_at', 'desc')->take(20)->get();

           $feed->title = 'Niaga Art Blog';
           $feed->description = 'Blog on interior design, other interior, and projects';
           $feed->logo = 'http://yoursite.tld/logo.jpg';
           $feed->link = url('feed');
           $feed->setDateFormat('datetime');
           $feed->pubdate = $posts[0]->created_at;
           $feed->lang = 'en';
           $feed->setShortening(true);
           $feed->setTextLimit(100);

           foreach ($posts as $post)
           {
               $feed->add($post->title, $post->author, url('/blog/'.$post->slug), $post->created_at, $post->slug, $post->content);
           }

        }

        return $feed->render('atom');

    }
}
