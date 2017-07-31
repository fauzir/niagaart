<?php

namespace App\Http\Controllers;

use App;
use App\About;
use App\Contact;
use App\Service;
use App\Social;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $about = About::find(1);
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $about = About::find(2);
            $contact = Contact::find(2);
        }
        return view('about', compact('interiors', 'others', 'servicefooters', 'about', 'socials', 'contact'));
    }
}
