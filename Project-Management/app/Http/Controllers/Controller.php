<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Controller extends BaseController
{
    
    public function delete($username)
    {
        DB::table('users')->where('username', $username)->delete();
        return redirect()->route('signup')->with('success', 'Project deleted successfully');
    }
}
