<?php

namespace App\Http\Controllers\AdminProjectItem;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\Project;
use App\ProjectItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ProjectItemController extends Controller
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
            $projectitem = ProjectItem::where('project_id', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('price', 'LIKE', "%$keyword%")
        ->orderBy('id', 'asc')
				->paginate($perPage);
        } else {
            $projectitem = ProjectItem::orderBy('id', 'asc')->paginate($perPage);
        }

        $projects = Project::all();

        return view('admin/project-item.project-item.index', compact('projectitem', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $projects = Project::all();
        return view('admin/project-item.project-item.create', compact('projects'));
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
          'image' => 'required',
          'project_id' => 'required',
          'name' => 'required'
        ]);

        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'project-item-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        ProjectItem::create($requestData);

        Session::flash('flash_message', 'ProjectItem added!');

        return redirect('admin/project-item');
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
        $projectitem = ProjectItem::findOrFail($id);

        return view('admin/project-item.project-item.show', compact('projectitem'));
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
        $projectitem = ProjectItem::findOrFail($id);
        $projects = Project::all();
        return view('admin/project-item.project-item.edit', compact('projectitem', 'projects'));
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
          'project_id' => 'required',
          'name' => 'required'
        ]);

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'home-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 400, "height" => 400,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        $projectitem = ProjectItem::findOrFail($id);
        $projectitem->update($requestData);

        Session::flash('flash_message', 'ProjectItem updated!');

        return redirect('admin/project-item');
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
        ProjectItem::destroy($id);

        Session::flash('flash_message', 'ProjectItem deleted!');

        return redirect('admin/project-item');
    }
}
