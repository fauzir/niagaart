<?php

namespace App\Http\Controllers\AdminProjects;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ProjectsController extends Controller
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
            $projects = Project::where('image', 'LIKE', "%$keyword%")
				->orWhere('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $projects = Project::paginate($perPage);
        }

        return view('admin/projects.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/projects.projects.create');
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
			'name' => 'required',
			'description' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $pictureName = 'project-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 600, "height" => 650,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        }

        Project::create($requestData);

        Session::flash('flash_message', 'Project added!');

        return redirect('admin/projects');
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
        $project = Project::findOrFail($id);

        return view('admin/projects.projects.show', compact('project'));
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
        $project = Project::findOrFail($id);

        return view('admin/projects.projects.edit', compact('project'));
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
			'name' => 'required',
			'description' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'project-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 600, "height" => 650,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
        } else {
          $requestData = $request->except('image');
        }

        $project = Project::findOrFail($id);
        $project->update($requestData);

        Session::flash('flash_message', 'Project updated!');

        return redirect('admin/projects');
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
        Project::destroy($id);

        Session::flash('flash_message', 'Project deleted!');

        return redirect('admin/projects');
    }
}
