<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function home_index(){
        return view('home');
    }
    public function activity_index(){
        return view('activity');
    }
    public function discussion_index(){
        return view('dashboard');
    }
    public function calender_index(){
        return view('calendar');
    }
    public function project_index(Request $request){
        $username = $request->session()->get("username");
        $projects = DB::select("select * from projects where username = '$username'");
        return view('projects',['projects' => $projects]);
    }
    public function member_index(){
        return view('teamMembers');
    }
    public function task_index(Request $request){
        $username = $request->session()->get("username");
        $tasks = DB::select("select * from tasks where username = '$username'");
        return view('tasks',['tasks' => $tasks]);
    }
    public function setting_index(){
        return view('settings');
    }
    public function profile_index(){
        return view('userProfile');
    }
}
