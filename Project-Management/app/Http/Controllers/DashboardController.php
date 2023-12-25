<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(){
        $activeProjects = Project::activeProject()->get();
        $completedProjects = Project::completedProject()->get();
        $totalProjects = Project::totalProject();
        $pendingTasks = Task::pendingTask()->get();
        $overdueTasks = Task::overdue()->get();
        $urgentTasks = Task::urgentTask()->get();
        $totalTasks = Task::totalTask();

        // Pass data to the view
        return view('home', [
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalProjects' => $totalProjects,
            'pendingTasks' => $pendingTasks,
            'overdueTasks' => $overdueTasks,
            'urgentTasks' => $urgentTasks,
            'totalTasks' => $totalTasks,
        ]);
    }
}
