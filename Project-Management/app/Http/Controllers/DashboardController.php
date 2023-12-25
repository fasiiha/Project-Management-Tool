<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(){
        $totalProject = Project::count();
        $totalTask = Task::count();
        $ActiveProject = Project::count();
        $CompletedProject = Project::count();
        $PendingTask = Task::count();
        $Overdue = Task::count();
        $UrgentTask = Task::count();
        return view('home', compact('ActiveProject', 'CompletedProject', 'PendingTask', 'totalProject', 'totalTask', 'Overdue', 'UrgentTask'));
    }
}
