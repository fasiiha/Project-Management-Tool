<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $project = new Project;
            $project->project_name = $request->input('project_name');
            $project->project_owner = "nkdjkdn";
            $project->description = $request->input('description');
            $project->members = $request->input('members');
            $project->status = $request->input('status');
            $project->attachments = $request->input('attachments');
            $project->start_date = $request->input('start_date');
            $project->due_date = $request->input('due_date');
            $project->save();

            return redirect()->route('home');
        }
        $projects = Project::all();
        $tasks = Task::all();
        return view('projects', ['projects' => $projects, 'tasks' => $tasks]);
    }
}
