<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TaskCOntroller extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $pass = $request->input('pass');

        if ($email == NULL || $pass == NULL) {
            echo '<script>alert("Enter complete data")</script>';
            return view("login");
        }

        $result = DB::select("SELECT username FROM users WHERE email = '$email' and password = '$pass'");

        // Check if there's a result
        if (!empty($result)) {
            $firstResult = $result[0];
            $name = $firstResult->username;

            // Now $name contains the task_id as a string
            echo $name;
        } else {
            echo '<script>alert("Invalid User")</script>';
            return view("login");
            // echo "No result found for task_name: $data";
        }

        $request->session()->put("username", $name);
        // session(['username' => $name]);
        return redirect("profile");
    }

    public function signup(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email2' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    $user = new User;
    $email = $request->input('email2');

    $existingUser = User::where('email', $email)->first();
    if ($existingUser) {
        return redirect()->route('login')->with('error', 'User already exists');
    }

    $user->username = $request->input('name');
    $user->email = $request->input('email2');
    $user->email_verified_at = now();
    $user->password = $request->input('password');
    $user->phone_number = $request->input('phone');
    $user->birthdate = $request->input('date');
    $user->address = $request->input('address');
    $user->linkedin = "ndjknd";
    $user->github = "ndjknd";
    $user->expertise = "ndjknd";

    $user->save();
    // dd($user);

    return view('home', ['user' => $user]);
}


    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $task = new Task;
            $task->project_id = 1;  // $request->input('project_id');
            $task->task_name = $request->input('task_name');
            $task->member_name = $request->input('member_name');
            $task->description = $request->input('description');
            $task->status = $request->input('status');
            $task->due_date = $request->input('due_date');
            $task->save();
            return redirect()->route('home');
        }
        $tasks = Task::all();
        return view('tasks', ['tasks' => $tasks]);
    }




    public function projects(Request $request)
    {
        $project = new Project;

        $project->name = $request->input('name');
        $project->description = $request->input('desc');
        $project->status = 'active';
        $project->due_date = $request->input('due_date');
        $project->time = $request->input('time');
        // Add other fields as needed
        $project->save();

        return redirect('/projects');
    }

    public function viewproject(Request $request)
    {
        $username = $request->session()->get("username");
        $data = $request->input('data');
        $projects = Project::all();
        return view('projectdata', ['projects' => $projects]);
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->route('home')->with('success', 'Task deleted successfully');
    }
    public function task_completed($id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->update(['status' => 'Completed']);
        return redirect()->back()->with('success', 'Task marked as Completed');
    }
    public function task_urgent($id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->update(['status' => 'Urgent']);
        return redirect()->back()->with('success', 'Task marked as Urgent');
    }

    public function showTasks($projectId)
{
    $project = Project::findOrFail($projectId);
    $tasks = Task::where('project_id', $projectId)->get();
    return view('home', ['tasks', 'project']);
}
}
