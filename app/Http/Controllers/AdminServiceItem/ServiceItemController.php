<?php

namespace App\Http\Controllers\AdminServiceItem;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\Service;
use App\ServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ServiceItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $serviceitem = ServiceItem::where('service_id', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $serviceitem = ServiceItem::orderBy('id', 'asc')->paginate($perPage);
        }

        return view('admin/service-item.service-item.index', compact('serviceitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $services = Service::all();
        return view('admin/service-item.service-item.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'service_id' => 'required',
			'image' => 'required|image',
			'name' => 'required',
			'description' => 'required',
			'detail' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'serviceitem-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        if($requestData['discount_val'] == 'none'){
          $requestData['discount_price'] = 'none';
        } elseif($requestData['discount_price'] == null) {
          $requestData['discount_price'] = 'none';
        };

        ServiceItem::create($requestData);

        Session::flash('flash_message', 'ServiceItem added!');

        return redirect('admin/service-item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $serviceitem = ServiceItem::findOrFail($id);

        return view('admin/service-item.service-item.show', compact('serviceitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $services = Service::all();
        $serviceitem = ServiceItem::findOrFail($id);

        return view('admin/service-item.service-item.edit', compact('serviceitem', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'service_id' => 'required',
			'image' => 'image',
			'name' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'serviceitem-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        if ($requestData['discount_val'] == 'none') {
          $requestData['discount_price'] = 'none';
        } elseif ($requestData['discount_val'] == 'percent') {
          $requestData['discount_price'] = $requestData['price'] - ($requestData['price'] * $requestData['discount_price'] / 100);
        } elseif ($requestData['discount_val'] == 'price') {
          $requestData['discount_price'] = $requestData['discount_price'];
        }

        $serviceitem = ServiceItem::findOrFail($id);
        $serviceitem->update($requestData);

        Session::flash('flash_message', 'ServiceItem updated!');

        return redirect('admin/service-item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        ServiceItem::destroy($id);

        Session::flash('flash_message', 'ServiceItem deleted!');

        return redirect('admin/service-item');
    }
}
