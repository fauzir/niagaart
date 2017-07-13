<?php

namespace App\Http\Controllers\AdminBlog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class BlogController extends Controller
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
            $blog = Blog::where('title', 'LIKE', "%$keyword%")
				->orWhere('category', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('content', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $blog = Blog::paginate($perPage);
        }

        return view('admin/blog.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/blog.blog.create');
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
			'title' => 'required',
			'category' => 'required',
			'image' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image'] = 'uploads/'.$file->getClientOriginalName();
        }

        Blog::create($requestData);

        Session::flash('flash_message', 'Blog added!');

        return redirect('admin/blog');
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
        $blog = Blog::findOrFail($id);

        return view('admin/blog.blog.show', compact('blog'));
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
        $blog = Blog::findOrFail($id);

        return view('admin/blog.blog.edit', compact('blog'));
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
			'title' => 'required',
			'category' => 'required',
			'image' => 'required'
		]);
        $requestData = $request->all();

        $blog = Blog::findOrFail($id);
        $blog->update($requestData);

        Session::flash('flash_message', 'Blog updated!');

        return redirect('admin/blog');
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
        Blog::destroy($id);

        Session::flash('flash_message', 'Blog deleted!');

        return redirect('admin/blog');
    }
}
