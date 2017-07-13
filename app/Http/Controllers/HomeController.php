<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('welcome', compact('homes'));
    }
}
