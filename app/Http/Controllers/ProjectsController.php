<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectItem;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $items = ProjectItem::all();
        return view('projects', compact('projects', 'items'));
    }

    public function getItem(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id);
        $data = ProjectItem::where('project_id', $id)->get();
        return view('projects-item', compact('project', 'data'));
    }
}
