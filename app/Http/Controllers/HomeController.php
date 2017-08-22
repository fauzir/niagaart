<?php

namespace App\Http\Controllers;

use App;
use App\Home;
use App\Contact;
use App\Blog;
use App\Service;
use App\Testimony;
use App\Promotion;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use HTMLMin;

class HomeController extends Controller
{
    public function layoutapp()
    {
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $home = Home::find(1);
            $contact = Contact::find(1);
            $interiors = Service::where('type', 'interior')->where('publish', 'yes')->where('lang', 'en')->orderBy('id', 'asc')->get();
            $others = Service::where('type', 'other')->where('publish', 'yes')->where('lang', 'en')->orderBy('id', 'asc')->get();
        } elseif (App::isLocale('id')) {
            $home = Home::find(2);
            $contact = Contact::find(2);
            $interiors = Service::where('type', 'interior')->where('publish', 'yes')->where('lang', 'id')->orderBy('id', 'asc')->get();
            $others = Service::where('type', 'other')->where('publish', 'yes')->where('lang', 'id')->orderBy('id', 'asc')->get();
        }

        $items = collect(['home' => $home, 'contact' => $contact, 'interiors' => $interiors, 'others' => $others, 'servicefooters' => $servicefooters, 'socials' => $socials]);
        return $items;
    }

    public function index(Request $request)
    {
        App::setLocale($request->locale);
        if (App::isLocale('admin')) {
            return redirect()->route('admin');
        } elseif (App::isLocale('login')) {
            return redirect()->route('login');
        } elseif (App::isLocale('blog')) {
            return redirect()->route('blog', ['locale' => 'en']);
        } elseif (App::isLocale('id')) {
            $blogs = Blog::limit(5)->select('id','title','category','image','content','author', 'created_at', 'slug')->where('lang', 'id')->orderBy('created_at', 'desc')->get();
        } elseif (App::isLocale('en')) {
            $blogs = Blog::limit(5)->select('id','title','category','image','content','author', 'created_at', 'slug')->where('lang', 'en')->orderBy('created_at', 'desc')->get();
        }
        $home = $this->layoutapp()->get('home');
        $contact = $this->layoutapp()->get('contact');
        $interiors = $this->layoutapp()->get('interiors');
        $others = $this->layoutapp()->get('others');
        $servicefooters = $this->layoutapp()->get('servicefooters');
        $socials = $this->layoutapp()->get('socials');
        $services = Service::limit(3)->select('id', 'image', 'name', 'tagline', 'slug')->where('type', 'interior')->orderBy('id', 'asc')->get();
        $testimonies = Testimony::all();
        $promos = Promotion::where('status', 'yes')->get();
        return view('home', compact('home', 'services', 'blogs', 'interiors', 'others', 'servicefooters', 'testimonies', 'promos', 'socials', 'contact'));
    }

    public function error()
    {
       return view('admin.not-authorized');
    }
}
