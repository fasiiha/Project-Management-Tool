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
        $username = $request->session()->get("username");
        $activeProjects = Project::activeProject($username);
        $completedProjects = Project::completedProject($username);
        $totalProjects = Project::totalProject($username);
        $pendingTasks = Task::pendingTask($username);
        $overdueTasks = Task::overdue($username);
        $urgentTasks = Task::urgentTask($username);
        $totalTasks = Task::totalTask($username);
        
        $projects = DB::select("SELECT * from projects WHERE admin_username = '$username'");
        $tasks = DB::select("select * from tasks where member_name = '$username'");
   
        return view('home', [
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalProjects' => $totalProjects,
            'pendingTasks' => $pendingTasks,
            'overdueTasks' => $overdueTasks,
            'urgentTasks' => $urgentTasks,
            'totalTasks' => $totalTasks,
            'projects' => $projects,
            'tasks' => $tasks,
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
