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
use App\ServiceItem;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        $promos = Promotion::where('status', 'yes')->get();
        if (App::isLocale('en')) {
            $services = Service::where('slug', $request->slug)->where('lang', 'en')->get();
        } elseif (App::isLocale('id')) {
            $services = Service::where('slug', $request->slug)->where('lang', 'id')->get();
        }
        foreach ($services as $service) {
          $get_services = Service::where('slug', $service->slug)->where('lang', 'id')->get();
          foreach ($get_services as $get_service) {
            $serviceitems = ServiceItem::where('service_id', $get_service->id)->orderBy('id', 'asc')->paginate(15);
          }
        }
        return view('service', compact('interiors', 'others', 'servicefooters', 'promos', 'services', 'serviceitems', 'socials', 'contact'));
    }

    public function getAll(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        if (App::isLocale('en')) {
            $services = Service::where('lang', 'en')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(1);
        } elseif (App::isLocale('id')) {
            $services = Service::where('lang', 'id')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(2);
        }
        return view('service-list', compact('interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials', 'contact'));
    }

    public function getInterior(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        if (App::isLocale('en')) {
            $services = Service::where('type', 'interior')->where('lang', 'en')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(1);
        } elseif (App::isLocale('id')) {
            $services = Service::where('type', 'interior')->where('lang', 'id')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(2);
        }
        // $products = DB::table('products')->join('services', 'products.service_id', '=', 'services.id')->select('products.id', 'products.name', 'products.image', 'products.description', 'products.price')->where('services.type', '=', 'interior')->paginate(9);
        return view('service-list', compact('contact', 'interiors', 'others', 'servicefooters', 'servicecatalogues', 'services', 'socials'));
    }

    public function getOther(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        if (App::isLocale('en')) {
            $services = Service::where('type', 'other')->where('lang', 'en')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(1);
        } elseif (App::isLocale('id')) {
            $services = Service::where('type', 'other')->where('lang', 'id')->orderBy('id', 'asc')->get();
            $servicecatalogues = ServiceCatalogue::find(2);
        }
        return view('service-list', compact('contact', 'interiors', 'others', 'servicefooters', 'services', 'servicecatalogues', 'socials'));
    }

    public function getServiceItem(Request $request)
    {
        $id = $request->id;
        $serviceitem = ServiceItem::find($id);
        $itemfirst = ServiceItem::where('service_id', $serviceitem->service_id)->first();
        $itemcount = ServiceItem::where('service_id', $serviceitem->service_id)->get()->last();
        $products = Product::where('service_item_id', $serviceitem->id)->get();
        return view('service-item', compact('serviceitem', 'itemfirst', 'itemcount', 'products'));
    }
}
