<?php

namespace App\Http\Controllers;

use App\About;
use App\Service;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $abouts = About::all();
        return view('about', compact('interiors', 'others', 'servicefooters', 'abouts'));
    }
}
