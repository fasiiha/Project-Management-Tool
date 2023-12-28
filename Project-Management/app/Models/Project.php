<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Project extends Model
{
    protected $fillable = [
        'project_name', 'due_date', 'description', 'status', 'category',
    ];

    public function scopeActiveProject($query, $username)
    {
        // $request = new Request;
        // $username = $request->session()->get("username");
        return $query->where('status', 'active')->where('admin_username',$username)->count();
    }

    public function scopeCompletedProject($query, $username)
    {
        return $query->where('status', 'completed')->where('admin_username',$username)->count();
    }

    public function scopeTotalProject($query, $username)
    {
        return $query->where('admin_username',$username)->count();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    
    // Project.php

// public function tasks()
// {
//     return $this->hasMany(Task::class, 'project_id');
// }

}
