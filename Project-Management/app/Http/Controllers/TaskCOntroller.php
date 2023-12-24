<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\DB;

class TaskCOntroller extends Controller
{
    public function store(Request $request) {
        $tasks = new task;
        $tasks->task_name = $request->input('name');
        $tasks->category = $request->input('type');
        $tasks->duedate = $request->input('date');
        $tasks->members = $request->input('member');
        $tasks->save();

        return redirect('/task');
    }

    public function index() {
        $tasks = DB::select("select * from tasks");
        return view('tasks',['tasks' => $tasks]);
    }

}
