<?php

namespace App\Http\Controllers;

use App\Home;
use App\Contact;
use App\Blog;
use App\Service;
use App\Testimony;
use App\Promotion;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        $services = Service::limit(3)->select('id', 'image', 'name', 'description', 'slug')->where('type', 'interior')->orderBy('id', 'asc')->get();
        $blogs = Blog::limit(5)->select('id','title','category','image','content','author', 'created_at', 'slug')->orderBy('created_at', 'desc')->get();
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $testimonies = Testimony::all();
        $promos = Promotion::where('status', 'yes')->get();
        $socials = Social::where('active', 'yes')->get();
        $contact = Contact::find(1);
        return view('home', compact('homes', 'services', 'blogs', 'interiors', 'others', 'servicefooters', 'testimonies', 'promos', 'socials', 'contact'));
    }

    public function error()
    {
       return view('admin.not-authorized');
    }

    public function uploadOriginal(Request $request)
    {
        $file = Input::file('image');
        $file->move('uploads', $file->getClientOriginalName());
        $filename = 'uploads/'.$file->getClientOriginalName();

        return view('img-result');
    }

    public function crop(Request $request)
    {
        $quality = 90;

        $src  = $request->input('image');
        $img  = imagecreatefromjpeg($src);
        $dest = ImageCreateTrueColor($request->input('w'),
            $request->input('h'));

        imagecopyresampled($dest, $img, 0, 0, $request->input('x'),
            $request->input('y'), $request->input('w'), $request->input('h'),
            $request->input('w'), $request->input('h'));
        imagejpeg($dest, $src, $quality);

        return "<img src='" . $src . "'>";
    }
}
