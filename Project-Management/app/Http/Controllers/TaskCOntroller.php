<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\DB;

class TaskCOntroller extends Controller
{
    public function login(Request $request) {
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

        $request->session()->put("username",$name);
        session(['username' => $name]);
        return redirect("home");
    }

    public function signup(Request $request) {
        $user = new users;
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

        $request->session()->put("username",$request->input('name'));
        return redirect('home');
    }

    public function store(Request $request) {
        $tasks = new task;
        $tasks->task_name = $request->input('name');
        $tasks->category = $request->input('type');
        $tasks->duedate = $request->input('date');
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

        return redirect('/project');
    }

    public function viewproject(Request $request) {
        $username = $request->session()->get("username");
        $data = $request->input('data');
        $projects = DB::select("select * from projects where username = '$username' and project_name = '$data'");
        return view('projectdata',['projects' => $projects]);
    }
    
}
