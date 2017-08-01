<?php

namespace App\Http\Controllers;

use DB;
use App;
use App\Contact;
use App\Service;
use App\ServiceCatalogue;
use App\Product;
use App\Promotion;
use App\Social;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $promos = Promotion::where('status', 'yes')->get();
        $services = Service::where('slug', $request->slug)->get();
        foreach ($services as $service) {
          $products = Product::where('service_id', $service->id)->orderBy('id', 'asc')->paginate(9);
        }
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        return view('service', compact('interiors', 'others', 'servicefooters', 'promos', 'services', 'products', 'socials', 'contact'));
    }

    public function getAll(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $services = Service::orderBy('id', 'asc')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials', 'contact'));
    }

    public function getInterior(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $promo1 = Promotion::find(1);
        $promo2 = Promotion::find(2);
        $promo3 = Promotion::find(3);
        $promo4 = Promotion::find(4);
        $services = Service::where('type', 'interior')->orderBy('id', 'asc')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        // $products = DB::table('products')->join('services', 'products.service_id', '=', 'services.id')->select('products.id', 'products.name', 'products.image', 'products.description', 'products.price')->where('services.type', '=', 'interior')->paginate(9);
        return view('service-list', compact('contact', 'interiors', 'others', 'servicefooters', 'servicecatalogues', 'promo1', 'promo2', 'promo3', 'promo4', 'services', 'socials'));
    }

    public function getOther(Request $request)
    {
        App::setLocale($request->locale);
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $servicefooters = Service::limit(3)->orderBy('id', 'asc')->get();
        $services = Service::where('type', 'other')->orderBy('id', 'asc')->get();
        $servicecatalogues = ServiceCatalogue::find(1);
        $socials = Social::where('active', 'yes')->get();
        if (App::isLocale('en')) {
            $contact = Contact::find(1);
        } elseif (App::isLocale('id')) {
            $contact = Contact::find(2);
        }
        return view('service-list', compact('contact', 'interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials'));
    }

    public function getProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
