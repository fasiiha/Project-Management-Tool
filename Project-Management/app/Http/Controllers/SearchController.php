<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('username', 'like', "%$query%")->get();
        $tasks = Task::where('name', 'like', "%$query%")->get();
        $projects = Project::where('project_name', 'like', "%$query%")->get();

        return view('search', ['users'=>$users, 'tasks'=>$tasks, 'projects'=>$projects]);
        // if ($request->isMethod('post')) {
        //     $task = new Task;
        //     $task->name = $request->input('name');
        //     $task->description = $request->input('description');
        //     $task->project_id = 1;
        //     // $request->input('project_id');
        //     $task->status = $request->input('status');
        //     $task->due_date = $request->input('due_date');
        //     // $task->time = $request->input('time');
        //     $task->save();
        //     return redirect()->route('home');
        // }
        // $search = Task::all();
        // return view('tasks', ['search' => $search]);
    }

    public function search_suggest($term){

        //  $user = DB::table('tasks')->where('task_name', 'like', $term . '%')->get();
        $user = DB::select("SELECT * FROM tasks WHERE task_name LIKE ?", ["$term%"]);
        // dd($user);
        return ($user);
    }
}
