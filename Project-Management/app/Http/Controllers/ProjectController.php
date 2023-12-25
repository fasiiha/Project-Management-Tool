<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $project = new Project;
        $project->project_name = $request->input('project_name');
        $project->project_owner = $request->input('project_owner');
        $project->description = $request->input('description');
        $project->members = $request->input('members');
        $project->status = $request->input('status');
        $project->attachments = "dkasdkl";
        $project->start_date = $request->input('start_date');
        $project->due_date = $request->input('due_date');
        $project->save();
        $projects = Project::all();

        return view('projects', ['projects' => $projects]);
    }
}
