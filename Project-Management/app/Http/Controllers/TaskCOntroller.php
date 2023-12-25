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

        $result = DB::select("SELECT username FROM user WHERE email = '$email' and password = '$pass'");

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
        session(['username' => $name]);
        return redirect("home");
    }

    public function signup(Request $request)
    {
        $user = new User;
        $email = $request->input('email2');

        $result = DB::select("SELECT username FROM user WHERE email = '$email'");
        if (!empty($result)) {
            echo '<script>alert("User already exists")</script>';
            return view("login");
        }

        $user->username = $request->input('name');
        $user->email = $request->input('email2');
        $user->password = $request->input('password');
        $user->save();

        $request->session()->put("username", $request->input('name'));
        return redirect('home');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $task = new Task;
            $task->name = $request->input('name');
            $task->description = $request->input('description');
            $task->project_id = 1;
            // $request->input('project_id');
            $task->status = $request->input('status');
            $task->due_date = $request->input('due_date');
            // $task->time = $request->input('time');
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
        return redirect()->route('home')->with('success', 'Project deleted successfully');
    }
}
