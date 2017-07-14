<?php

namespace App\Http\Controllers;

use App\Service;
use App\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request, $name)
    {
        if ($name == 'home-living') {
           $service = Service::find(1);
           $products = Product::all();

           return view('service', compact('service', 'products'));
        } elseif ($name == 'apartment') {
            $service = Service::find(2);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'cafe-foodcourt') {
            $service = Service::find(3);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'shop-office') {
            $service = Service::find(4);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'flooring') {
            $service = Service::find(5);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'blind') {
            $service = Service::find(6);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'wall-paper') {
            $service = Service::find(7);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'wall-clading') {
            $service = Service::find(8);
            $products = Product::all();

            return view('service', compact('service', 'products'));
        } elseif ($name == 'chair') {
            $service = Service::find(9);
            $products = Product::all();
        }

            return view('service', compact('service', 'products'));
        }
    }
