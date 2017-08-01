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
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $keyword = $request->get('search');
        $perPage = 3;

        if (!empty($keyword)) {
            App::setLocale($request->locale);
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
            $socials = Social::where('active', 'yes')->get();
            if (App::isLocale('en')) {
                $contact = Contact::find(1);
            } elseif (App::isLocale('id')) {
                $contact = Contact::find(2);
            }
            return view('blog', compact('servicefooters', 'blogs', 'categories', 'count', 'populars', 'socials', 'contact'));
        } else {
            App::setLocale($request->locale);
            $blogs = Blog::with('tag_blog')->orderBy('created_at', 'desc')->paginate($perPage);
            // Blog::orderBy('created_at', 'desc')->paginate($perPage);
            $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
            $count = 0;//BlogTag::find($request->id)->tag_blog->count();
            $populars = Blog::limit(3)->orderBy('visitor_count', 'desc')->get();
            $socials = Social::where('active', 'yes')->get();
            if (App::isLocale('en')) {
                $contact = Contact::find(1);
            } elseif (App::isLocale('id')) {
                $contact = Contact::find(2);
            }
            return view('blog', compact('blogs', 'servicefooters', 'categories', 'count', 'populars', 'socials', 'contact'));
        }
    }

    public function getContent(Request $request)
    {
        App::setLocale($request->locale);
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        Blog::where('slug', $request->slug)->increment('visitor_count', 1);
        $blogs = Blog::all();
        $categories = DB::table('blog_tag')->join('blog_tags', 'blog_tag.tag_id', 'blog_tags.id')->select(DB::raw('tag_id, slug, tag, count(tag_id) as total'))->groupBy('tag_id', 'slug', 'tag')->get();
        $count = 0;
        $contents = Blog::where('slug', $request->slug)->get();
        $array = array();
        foreach ($blogs as $blog) {
          $tags = Blog::find($blog->id)->tag_blog;
          foreach ($tags as $tag) {
            $array[] = $tag->tag;
          }
        }
        $rel = implode (",", $array);
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        return view('blog-content', compact('servicefooters', 'contents', 'categories', 'count', 'rel', 'socials', 'contact'));
    }

    public function getCategory(Request $request, $slug)
    {
        App::setLocale($request->locale);
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $finds = BlogTag::where('slug', $request->slug)->get();
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
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        return view('blog-category', compact('servicefooters', 'blogs', 'categories', 'count', 'populars', 'rel', 'socials', 'contact'));
    }

    public function getFeed()
    {
        // create new feed
        $feed = App::make("feed");

        // multiple feeds are supported
        // if you are using caching you should set different cache keys for your feeds

        // cache the feed for 60 minutes (second parameter is optional)
        $feed->setCache(60, 'laravelFeedKey');

        // check if there is cached feed and build new only if is not
        if (!$feed->isCached())
        {
           // creating rss feed with our most recent 20 posts
           $posts = DB::table('blogs')->orderBy('created_at', 'desc')->take(20)->get();

           // set your feed's title, description, link, pubdate and language
           $feed->title = 'Niaga Art Blog';
           $feed->description = 'Blog on interior design, other interior, and projects';
           $feed->logo = 'http://yoursite.tld/logo.jpg';
           $feed->link = url('feed');
           $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
           $feed->pubdate = $posts[0]->created_at;
           $feed->lang = 'en';
           $feed->setShortening(true); // true or false
           $feed->setTextLimit(100); // maximum length of description text

           foreach ($posts as $post)
           {
               // set item's title, author, url, pubdate, description, content, enclosure (optional)*
               $feed->add($post->title, $post->author, url('/blog/'.$post->slug), $post->created_at, $post->slug, $post->content);
           }

        }

        // first param is the feed format
        // optional: second param is cache duration (value of 0 turns off caching)
        // optional: you can set custom cache key with 3rd param as string
        return $feed->render('atom');

        // to return your feed as a string set second param to -1
        // $xml = $feed->render('atom', -1);
    }
}
