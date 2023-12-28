<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $activeProjects = Project::activeProject();
        $completedProjects = Project::completedProject();
        $totalProjects = Project::totalProject();
        $pendingTasks = Task::pendingTask();
        $overdueTasks = Task::overdue();
        $urgentTasks = Task::urgentTask();
        $totalTasks = Task::totalTask();

        $task = new Task;
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->project_id = 1;
        // $request->input('project_id');
        $task->status = $request->input('status');
        $task->due_date = $request->input('due_date');
        // $task->time = $request->input('time');
        $task->save();
        $tasks = Task::all();
        $projects = Project::all();

        // Pass data to the view
        return view('home', [
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalProjects' => $totalProjects,
            'pendingTasks' => $pendingTasks,
            'overdueTasks' => $overdueTasks,
            'urgentTasks' => $urgentTasks,
            'totalTasks' => $totalTasks,
            'tasks' => $tasks,
            'projects' => $projects
        ]);
    }

    public function delete_u(Request $request)
    {
        $username = $request->session()->get("username");
        
        DB::table('users')->where('username', $username)->delete();
        return redirect()->route('page')->with('success', 'Project deleted successfully');
    }


    public function showDeleteForm(Request $request)
    {
        $username = $request->session()->get("username");
        $user = User::where('username', $username)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found');
        }

        return view('deleteacc', ['user' => $user]);
    }

}
