<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function delete($id)
    {
        DB::table('projects')->where('id', $id)->delete();
        return redirect()->route('home')->with('success', 'Project deleted successfully');
    }

    public function details(Request $request)
    {
        $projectId = $request->input('project_id');
        $projectDetails = DB::table('projects')->where('id', $projectId)->first();

        return view('projectdata', ['projectDetails' => $projectDetails]);
    }
}
