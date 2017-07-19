<?php

namespace App\Http\Controllers\AdminServiceCatalogue;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ServiceCatalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ServiceCatalogueController extends Controller
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
            $servicecatalogue = ServiceCatalogue::where('image_header', 'LIKE', "%$keyword%")
				->orWhere('opening_title', 'LIKE', "%$keyword%")
				->orWhere('opening_text', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $servicecatalogue = ServiceCatalogue::paginate($perPage);
        }

        return view('admin/service-catalogue.service-catalogue.index', compact('servicecatalogue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/service-catalogue.service-catalogue.create');
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
			'image_header' => 'required',
			'opening_title' => 'required',
			'opening_text' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image_header')){
          $file = Input::file('image_header');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image_header'] = 'uploads/'.$file->getClientOriginalName();
        }

        ServiceCatalogue::create($requestData);

        Session::flash('flash_message', 'ServiceCatalogue added!');

        return redirect('admin/service-catalogue');
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
        $servicecatalogue = ServiceCatalogue::findOrFail($id);

        return view('admin/service-catalogue.service-catalogue.show', compact('servicecatalogue'));
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
        $servicecatalogue = ServiceCatalogue::findOrFail($id);

        return view('admin/service-catalogue.service-catalogue.edit', compact('servicecatalogue'));
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
			'opening_title' => 'required',
			'opening_text' => 'required'
		]);

        if (Input::hasFile('image_header')) {
          $requestData = $request->all();

          $file = Input::file('image_header');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image_header'] = 'uploads/'.$file->getClientOriginalName();
        } else {
          $requestData = $request->except('image_header');
        }

        $servicecatalogue = ServiceCatalogue::findOrFail($id);
        $servicecatalogue->update($requestData);

        Session::flash('flash_message', 'ServiceCatalogue updated!');

        return redirect('admin/service-catalogue');
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
        ServiceCatalogue::destroy($id);

        Session::flash('flash_message', 'ServiceCatalogue deleted!');

        return redirect('admin/service-catalogue');
    }
}
