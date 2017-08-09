<?php

namespace App\Http\Controllers;

use App;
use App\Contact;
use App\Project;
use App\ProjectItem;
use App\Service;
use App\Social;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->locale);
        $contact = app('App\Http\Controllers\HomeController')->layoutapp()->get('contact');
        $interiors = app('App\Http\Controllers\HomeController')->layoutapp()->get('interiors');
        $others = app('App\Http\Controllers\HomeController')->layoutapp()->get('others');
        $servicefooters = app('App\Http\Controllers\HomeController')->layoutapp()->get('servicefooters');
        $socials = app('App\Http\Controllers\HomeController')->layoutapp()->get('socials');

        $featureds = Project::where('status', 'yes')->orderBy('id', 'asc')->get();
        $projects = Project::where('status', 'no')->orderBy('id', 'asc')->paginate(15);
        $items = ProjectItem::orderBy('id', 'asc');
        return view('projects', compact('interiors', 'others', 'servicefooters', 'featureds', 'projects', 'items', 'socials', 'contact'));
    }

    public function getItem(Request $request)
    {
        $id = $request->id;
        $project = Project::find($id);
        $itemcount = Project::count();
        $data = ProjectItem::where('project_id', $id)->get();
        return view('projects-item', compact('project', 'itemcount', 'data'));
    }
}
