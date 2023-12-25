<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
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

        // Pass data to the view
        return view('home', [
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalProjects' => $totalProjects,
            'pendingTasks' => $pendingTasks,
            'overdueTasks' => $overdueTasks,
            'urgentTasks' => $urgentTasks,
            'totalTasks' => $totalTasks,
            'tasks' => $tasks
        ]);
    }
}
