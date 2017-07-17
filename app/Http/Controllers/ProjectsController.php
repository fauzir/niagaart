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
        $items = Project::with('item')->get();
        return view('projects', compact('projects', 'items'));
    }
}
