<?php

namespace App\Http\Controllers\AdminTestimony;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class TestimonyController extends Controller
{
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
            $testimony = Testimony::where('image', 'LIKE', "%$keyword%")
				->orWhere('subject', 'LIKE', "%$keyword%")
				->orWhere('testimony', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('occupation', 'LIKE', "%$keyword%")
        ->orderBy('id', 'asc')
				->paginate($perPage);
        } else {
            $testimony = Testimony::orderBy('id', 'asc')->paginate($perPage);
        }

        return view('admin/testimony.testimony.index', compact('testimony'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/testimony.testimony.create');
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
			'image' => 'required|image',
			'subject' => 'required',
			'name' => 'required',
			'occupation' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'testimony-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        Testimony::create($requestData);

        Session::flash('flash_message', 'Testimony added!');

        return redirect('admin/testimony');
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
        $testimony = Testimony::findOrFail($id);

        return view('admin/testimony.testimony.show', compact('testimony'));
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
        $testimony = Testimony::findOrFail($id);

        return view('admin/testimony.testimony.edit', compact('testimony'));
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
			'image' => 'image',
			'subject' => 'required',
			'name' => 'required',
			'occupation' => 'required'
		]);
        $requestData = $request->all();

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'testimony-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        $testimony = Testimony::findOrFail($id);
        $testimony->update($requestData);

        Session::flash('flash_message', 'Testimony updated!');

        return redirect('admin/testimony');
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
        Testimony::destroy($id);

        Session::flash('flash_message', 'Testimony deleted!');

        return redirect('admin/testimony');
    }
}
