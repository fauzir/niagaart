<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCatalogue;
use App\Product;
use App\Promotion;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request, $slug)
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $promotions = Promotion::where('status', 'yes')->get();
        $services = Service::where('slug', $slug)->get();
        foreach ($services as $service) {
          $products = Product::limit(3)->select('id','image','name','description','price')->where('service_id', $service->id)->orderBy('id', 'asc')->get();
        }
        return view('service', compact('interiors', 'others', 'servicefooters', 'promotions', 'services', 'products'));
    }

    public function getAll()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $services = Service::orderBy('id', 'asc');
        $servicecatalogues = ServiceCatalogue::find(1);
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'services', 'servicecatalogues'));
    }

    public function getProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
