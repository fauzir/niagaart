<?php

namespace App\Http\Controllers\AdminAbout;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class AboutController extends Controller
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
            $about = About::where('image_header', 'LIKE', "%$keyword%")
				->orWhere('opening_image', 'LIKE', "%$keyword%")
				->orWhere('opening_title', 'LIKE', "%$keyword%")
				->orWhere('opening_text', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $about = About::paginate($perPage);
        }

        return view('admin/about.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/about.about.create');
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
			'opening_image' => 'required',
			'opening_title' => 'required',
			'opening_text' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image_header')){
          $file = Input::file('image_header');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image_header'] = 'uploads/'.$file->getClientOriginalName();
        }

        if(Input::hasFile('opening_image')){
          $file = Input::file('opening_image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['opening_image'] = 'uploads/'.$file->getClientOriginalName();
        }

        About::create($requestData);

        Session::flash('flash_message', 'About added!');

        return redirect('admin/about');
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
        $about = About::findOrFail($id);

        return view('admin/about.about.show', compact('about'));
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
        $about = About::findOrFail($id);

        return view('admin/about.about.edit', compact('about'));
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

        if (Input::hasFile('opening_image')) {
          $requestData = $request->all();

          $file = Input::file('opening_image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['opening_image'] = 'uploads/'.$file->getClientOriginalName();
        } else {
          $requestData = $request->except('opening_image');
        }

        $about = About::findOrFail($id);
        $about->update($requestData);

        Session::flash('flash_message', 'About updated!');

        return redirect('admin/about');
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
        About::destroy($id);

        Session::flash('flash_message', 'About deleted!');

        return redirect('admin/about');
    }
}
