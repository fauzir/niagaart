<?php

namespace App\Http\Controllers\AdminSocial;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Social;
use Illuminate\Http\Request;
use Session;

class SocialController extends Controller
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
            $social = Social::where('facebook', 'LIKE', "%$keyword%")
				->orWhere('twitter', 'LIKE', "%$keyword%")
				->orWhere('linkedin', 'LIKE', "%$keyword%")
				->orWhere('instagram', 'LIKE', "%$keyword%")
				->orWhere('skype', 'LIKE', "%$keyword%")
				->orWhere('youtube', 'LIKE', "%$keyword%")
				->orWhere('google', 'LIKE', "%$keyword%")
				->orWhere('pinterest', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $social = Social::paginate($perPage);
        }

        return view('admin/social.social.index', compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/social.social.create');
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

        $requestData = $request->all();

        Social::create($requestData);

        Session::flash('flash_message', 'Social added!');

        return redirect('admin/social');
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
        $social = Social::findOrFail($id);

        return view('admin/social.social.show', compact('social'));
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
        $social = Social::findOrFail($id);

        return view('admin/social.social.edit', compact('social'));
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

        $requestData = $request->all();

        $social = Social::findOrFail($id);
        $social->update($requestData);

        Session::flash('flash_message', 'Social updated!');

        return redirect('admin/social');
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
        Social::destroy($id);

        Session::flash('flash_message', 'Social deleted!');

        return redirect('admin/social');
    }
}
