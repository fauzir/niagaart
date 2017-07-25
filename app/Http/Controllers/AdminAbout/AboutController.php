<?php

namespace App\Http\Controllers\AdminAbout;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class AboutController extends Controller
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
        $about = About::findOrFail(1);

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
			'opening_image' => 'required',
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
			'opening_text' => 'required'
		]);

        if (Input::hasFile('image_header')) {
          $file = Input::file('image_header');
          $pictureName = 'about-header-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 1407, "height" => 616,
            ));
          $upload = Cloudder::getResult();
          $requestData['image_header'] = $upload['url'];
        } else {
          $requestData = $request->except('image_header');
        }

        if (Input::hasFile('opening_image')) {
          $file = Input::file('opening_image');
          $pictureName = 'about-image-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 600, "height" => 650,
            ));
          $upload = Cloudder::getResult();
          $requestData['opening_image'] = $upload['url'];
        } else {
          $requestData = $request->except('opening_image');
        }

        $about = About::findOrFail($id);
        $about->update($requestData);

        Session::flash('flash_message', 'About updated!');

        return redirect('admin/home');
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
