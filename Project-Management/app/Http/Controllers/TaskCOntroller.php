<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Models\users;
use App\Models\project;
use Illuminate\Support\Facades\DB;

class TaskCOntroller extends Controller
{
    public function login(Request $request) {
        $data = $request->input('email');
        
        $result = DB::select("SELECT username FROM user WHERE email = '$data'");

        // Check if there's a result
        if (!empty($result)) {
            // Access the first result and extract the task_id
            $firstResult = $result[0];
            $name = $firstResult->username;

            // Now $name contains the task_id as a string
            echo $name;
        } else {
            // Handle the case where no results were found
            echo "No result found for task_name: $data";
        }

        $request->session()->put("username",$name);
        session(['username' => $name]);
        return redirect("home");
    }

    public function signup(Request $request) {
        $user = new users;
        
        $user->username = $request->input('name');
        $user->email = $request->input('email2');
        $user->password = $request->input('password');
        $user->save();

        $request->session()->put("username",$request->input('name'));
        return redirect('home');
    }

    public function store(Request $request) {
        $tasks = new task;
        $tasks->username = $request->session()->get("username");
        $tasks->task_name = $request->input('name');
        $tasks->category = $request->input('type');
        $tasks->due_date = $request->input('date');
        $tasks->members = $request->input('member');
        $tasks->save();

        return redirect('/task');
    }

    public function projects(Request $request) {
        $tasks = new project;
        
        $tasks->username = $request->session()->get("username");
        $tasks->project_name = $request->input('name');
        $tasks->category = $request->input('category');
        $tasks->duedate = $request->input('date');
        $tasks->members = $request->input('member');
        $tasks->longdesc = $request->input('desc');
        $tasks->save();

        // $request->session()->put("username",$name);
        return redirect('/project');
    }

    public function index(Request $request) {
        $username = $request->session()->get("username");
        $tasks = DB::select("select * from tasks where username = '$username'");
        return view('tasks',['tasks' => $tasks]);
    }

    public function index1(Request $request) {
        $username = $request->session()->get("username");
        $projects = DB::select("select * from projects where username = '$username'");
        return view('projects',['projects' => $projects]);
    }
}