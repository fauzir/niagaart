<?php

namespace App\Http\Controllers\AdminBlog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Clouder;
use App\Blog;
use App\BlogCategory;
use App\BlogTag;
use App\BlogTagRel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class BlogController extends Controller
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
        $categories = BlogCategory::all();
        $array = array();
        $array[] = "";
        $rel = implode (",", $array);
        return view('admin/blog.blog.create', compact('categories', 'rel'));
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
        $requestData = $request->except('tag');
        $tagData = $request->input('tag');

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'home-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 539, "height" => 539,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        $blog = new Blog();
        $blog->title = $requestData['title'];
        $blog->category = $requestData['category'];
        $blog->image = $requestData['image'];
        $blog->content = $requestData['content'];
        $blog->author = $requestData['author'];

        $blog->save();

        $tags = explode(',', $tagData);
        foreach ($tags as $tag)
        {
          if (BlogTag::where('tag', $tag)->exists()) {
            $inputtags = BlogTag::where('tag', $tag)->get();
            $blogtagrel = new BlogTagRel();
            $blogtagrel->blog_id = $blog->id;
            foreach ($inputtags as $inputtag) {
              $blogtagrel->tag_id = $inputtag->id;
            }
            $blogtagrel->save();
          } else {
            $blogtag = new BlogTag();
            $blogtag->tag = $tag;
            $blogtag->save();

            $blogtagrel = new BlogTagRel();
            $blogtagrel->blog_id = $blog->id;
            $blogtagrel->tag_id = $blogtag->id;
            $blogtagrel->save();
          }
        }

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
        $categories = BlogCategory::all();
        $blogtagrels = Blog::find($id)->tag_blog;
        $array = array();
        foreach ($blogtagrels as $blogtagrel) {
          $array[] = $blogtagrel->tag;
        }
        $rel = implode (",", $array);
        return view('admin/blog.blog.show', compact('blog', 'categories', 'rel'));
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
        $categories = BlogCategory::all();
        $blogtagrels = Blog::find($id)->tag_blog;
        $array = array();
        foreach ($blogtagrels as $blogtagrel) {
          $array[] = $blogtagrel->tag;
        }
        $rel = implode (",", $array);
        return view('admin/blog.blog.edit', compact('blog', 'categories', 'rel'));
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
        $requestData = $request->except('tag');
        $tagData = $request->input('tag');

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'home-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 539, "height" => 539,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        $blog = new Blog();
        $blog->title = $requestData['title'];
        $blog->category = $requestData['category'];
        $blog->image = $requestData['image'];
        $blog->content = $requestData['content'];
        $blog->author = $requestData['author'];

        $blog->save();

        $tags = explode(',', $tagData);
        foreach ($tags as $tag)
        {
          if (BlogTag::where('tag', $tag)->exists()) {
            $inputtags = BlogTag::where('tag', $tag)->get();
            $blogtagrel = new BlogTagRel();
            $blogtagrel->blog_id = $blog->id;
            foreach ($inputtags as $inputtag) {
              $blogtagrel->tag_id = $inputtag->id;
            }
            $blogtagrel->save();
          } else {
            $blogtag = new BlogTag();
            $blogtag->tag = $tag;
            $blogtag->save();

            $blogtagrel = new BlogTagRel();
            $blogtagrel->blog_id = $blog->id;
            $blogtagrel->tag_id = $blogtag->id;
            $blogtagrel->save();
          }
        }

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
