<?php

namespace App\Http\Controllers\AdminService;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Image;

class ServiceController extends Controller
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
        $keyword = $request->input('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $service = Service::where('id', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
        ->orWhere('description', 'LIKE', "%$keyword%")
        ->orderBy('id', 'asc')
				->paginate($perPage);
        } else {
            $service = Service::orderBy('id', 'asc')->paginate($perPage);
        }

        return view('admin/services.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/services.service.create');
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
			'banner_image' => 'required|image',
			'image' => 'required|image',
			'name' => 'required',
			'tagline' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('banner_image')){
          $file = Input::file('banner_image');
          $pictureName = 'service-banner-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 3840, "height" => 2160,
            ));
          $upload = Cloudder::getResult();
          $requestData['banner_image'] = $upload['url'];
        }

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'service-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 300, "height" => 450,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        Service::create($requestData);

        Session::flash('flash_message', 'Service added!');

        return redirect('admin/service');
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
        $service = Service::findOrFail($id);

        return view('admin/services.service.show', compact('service'));
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
        $service = Service::findOrFail($id);

        return view('admin/services.service.edit', compact('service'));
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
      'banner_image' => 'image',
      'image' => 'image',
			'name' => 'required',
			'tagline' => 'required',
			'description' => 'required'
		]);

        if (Input::hasFile('banner_image')) {
          $file = Input::file('banner_image');
          $pictureName = 'service-banner-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 3840, "height" => 2160,
            ));
          $upload = Cloudder::getResult();
          $requestData['banner_image'] = $upload['url'];
        } else {
          $requestData = $request->except('banner_image');
        }

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'service-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 300, "height" => 450,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        $service = Service::findOrFail($id);
        $service->update($requestData);

        Session::flash('flash_message', 'Service updated!');

        return redirect('admin/service');
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
        Service::destroy($id);

        Session::flash('flash_message', 'Service deleted!');

        return redirect('admin/service');
    }
}
