<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCatalogue;
use App\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request, $name)
    {
        $products = Product::limit(3)->select('id','image','name','description','price')->get();
        if ($name == 'home-living') {
           $service = Service::find(1);
           return view('service', compact('service', 'products'));
        } elseif ($name == 'apartment') {
            $service = Service::find(2);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'cafe-foodcourt') {
            $service = Service::find(3);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'shop-office') {
            $service = Service::find(4);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'flooring') {
            $service = Service::find(5);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'blind') {
            $service = Service::find(6);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'wall-paper') {
            $service = Service::find(7);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'wall-clading') {
            $service = Service::find(8);
            return view('service', compact('service', 'products'));
        } elseif ($name == 'chair') {
            $service = Service::find(9);
        }
        return view('service', compact('service', 'products'));
    }

    public function getAll()
    {
        $services = Service::all();
        $servicecatalogues = ServiceCatalogue::find(1);
        return view('service-list', compact('services', 'servicecatalogues'));
    }

    public function getProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
