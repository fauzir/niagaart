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
        $interiors = Service::where('type', 'interior')->where('publish', 'yes')->get();
        $others = Service::where('type', 'other')->where('publish', 'yes')->get();
        $featureds = Project::where('status', 'yes')->get();
        $projects = Project::where('status', 'no')->get();
        $items = ProjectItem::all();
        return view('projects', compact('interiors', 'others', 'featureds', 'projects', 'items'));
    }

    public function getItem(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id);
        $data = ProjectItem::where('project_id', $id)->get();
        return view('projects-item', compact('project', 'data'));
    }
}
