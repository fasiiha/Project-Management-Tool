<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function store(Request $request) {
        $task = new task;
        $name = $request->input('name');
        $type = $request->input('type');
        $date = $request->input('date');
        $member = $request->input('member');
        $task->save();
        return redirect('/create');
}
}


