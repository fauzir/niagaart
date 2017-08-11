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
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        if (App::isLocale('en')) {
            $about = About::find(1);
        } elseif (App::isLocale('id')) {
            $about = About::find(2);
        }
        return view('about', compact('interiors', 'others', 'servicefooters', 'about', 'socials', 'contact'));
    }
}
