<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCatalogue;
use App\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request, $id)
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->get();
        $service = Service::find($id);
        $products = Product::limit(3)->select('id','image','name','description','price')->where('service_id', $id)->get();
        return view('service', compact('interiors', 'others', 'service', 'products'));
    }

    public function getAll()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->get();
        $services = Service::all();
        $servicecatalogues = ServiceCatalogue::find(1);
        return view('service-list', compact('interiors', 'others', 'services', 'servicecatalogues'));
    }

    public function getProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
