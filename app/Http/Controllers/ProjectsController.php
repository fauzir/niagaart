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

        if (App::isLocale('en')) {
            $featureds = Project::where('status', 'yes')->where('lang', 'en')->orderBy('id', 'asc')->get();
            $projects = Project::where('status', 'no')->where('lang', 'en')->orderBy('id', 'asc')->paginate(15);
        } elseif (App::isLocale('id')) {
            $featureds = Project::where('status', 'yes')->where('lang', 'id')->orderBy('id', 'asc')->get();
            $projects = Project::where('status', 'no')->where('lang', 'id')->orderBy('id', 'asc')->paginate(15);
        }
        $items = ProjectItem::orderBy('id', 'asc');
        return view('projects', compact('interiors', 'others', 'servicefooters', 'featureds', 'projects', 'items', 'socials', 'contact'));
    }

    public function getItem(Request $request)
    {
        $get_project = Project::find($request->id);
        $project = Project::where('name', $get_project->name)->first();
        $itemfirst = Project::first();
        $itemcount = Project::count();
        $data = ProjectItem::where('project_id', $project->id)->get();
        return view('projects-item', compact('project', 'itemfirst', 'itemcount', 'data'));
    }
}
