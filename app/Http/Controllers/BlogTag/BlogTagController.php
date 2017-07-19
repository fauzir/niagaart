<?php

namespace App\Http\Controllers\BlogTag;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlogTag;
use Illuminate\Http\Request;
use Session;

class BlogTagController extends Controller
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
            $blogtag = BlogTag::where('tag', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $blogtag = BlogTag::paginate($perPage);
        }

        return view('admin/blog-tag.blog-tag.index', compact('blogtag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/blog-tag.blog-tag.create');
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
			'tag' => 'required'
		]);
        $requestData = $request->all();
        
        BlogTag::create($requestData);

        Session::flash('flash_message', 'BlogTag added!');

        return redirect('admin/blog-tag');
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
        $blogtag = BlogTag::findOrFail($id);

        return view('admin/blog-tag.blog-tag.show', compact('blogtag'));
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
        $blogtag = BlogTag::findOrFail($id);

        return view('admin/blog-tag.blog-tag.edit', compact('blogtag'));
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
			'tag' => 'required'
		]);
        $requestData = $request->all();
        
        $blogtag = BlogTag::findOrFail($id);
        $blogtag->update($requestData);

        Session::flash('flash_message', 'BlogTag updated!');

        return redirect('admin/blog-tag');
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
        BlogTag::destroy($id);

        Session::flash('flash_message', 'BlogTag deleted!');

        return redirect('admin/blog-tag');
    }
}
