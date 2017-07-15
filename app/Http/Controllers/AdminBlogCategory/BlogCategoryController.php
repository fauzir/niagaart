<?php

namespace App\Http\Controllers\AdminBlogCategory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlogCategory;
use Illuminate\Http\Request;
use Session;

class BlogCategoryController extends Controller
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
            $blogcategory = BlogCategory::where('category', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $blogcategory = BlogCategory::paginate($perPage);
        }

        return view('admin/blog-category.blog-category.index', compact('blogcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/blog-category.blog-category.create');
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
			'category' => 'required'
		]);
        $requestData = $request->all();
        
        BlogCategory::create($requestData);

        Session::flash('flash_message', 'BlogCategory added!');

        return redirect('admin/blog-category');
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
        $blogcategory = BlogCategory::findOrFail($id);

        return view('admin/blog-category.blog-category.show', compact('blogcategory'));
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
        $blogcategory = BlogCategory::findOrFail($id);

        return view('admin/blog-category.blog-category.edit', compact('blogcategory'));
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
			'category' => 'required'
		]);
        $requestData = $request->all();
        
        $blogcategory = BlogCategory::findOrFail($id);
        $blogcategory->update($requestData);

        Session::flash('flash_message', 'BlogCategory updated!');

        return redirect('admin/blog-category');
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
        BlogCategory::destroy($id);

        Session::flash('flash_message', 'BlogCategory deleted!');

        return redirect('admin/blog-category');
    }
}
