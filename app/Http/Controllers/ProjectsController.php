<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectItem;
use App\Service;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->orderBy('id', 'asc')->get();
        $featureds = Project::where('status', 'yes')->orderBy('id', 'asc')->get();
        $projects = Project::where('status', 'no')->orderBy('id', 'asc')->get();
        $items = ProjectItem::orderBy('id', 'asc');
        return view('projects', compact('interiors', 'others', 'featureds', 'projects', 'items'));
    }

    public function getItem(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id)->orderBy('id', 'asc');
        $data = ProjectItem::where('project_id', $id)->orderBy('id', 'asc')->get();
        return view('projects-item', compact('project', 'data'));
    }
}
