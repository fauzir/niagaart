<?php

namespace App\Http\Controllers;

use DB;
use App\Service;
use App\ServiceCatalogue;
use App\Product;
use App\Promotion;
use App\Social;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request, $slug)
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $promo1 = Promotion::find(1);
        $promo2 = Promotion::find(2);
        $promo3 = Promotion::find(3);
        $promo4 = Promotion::find(4);
        $services = Service::where('slug', $slug)->get();
        foreach ($services as $service) {
          $products = Product::where('service_id', $service->id)->orderBy('id', 'asc')->paginate(9);
        }
        $socials = Social::where('active', 'yes')->get();
        return view('service', compact('interiors', 'others', 'servicefooters', 'promo1', 'promo2', 'promo3', 'promo4', 'services', 'products', 'socials'));
    }

    public function getAll()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $services = Service::orderBy('id', 'asc')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials'));
    }

    public function getInterior()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $promo1 = Promotion::find(1);
        $promo2 = Promotion::find(2);
        $promo3 = Promotion::find(3);
        $promo4 = Promotion::find(4);
        $services = Service::where('type', 'interior')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        $products = DB::table('products')->join('services', 'products.service_id', '=', 'services.id')->select('products.id', 'products.name', 'products.image', 'products.description', 'products.price')->where('services.type', '=', 'interior')->paginate(9);
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'servicecatalogues', 'promo1', 'promo2', 'promo3', 'promo4', 'services', 'socials', 'products'));
    }

    public function getOther()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $services = Service::where('type', 'other')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials'));
    }

    public function getProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
