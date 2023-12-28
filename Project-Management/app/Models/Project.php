<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name', 'due_date', 'description', 'status', 'category',
    ];

    public function scopeActiveProject($query)
    {
        return $query->where('status', 'active')->count();
    }

    public function scopeCompletedProject($query)
    {
        return $query->where('status', 'completed')->count();
    }

    public function scopeTotalProject($query)
    {
        return $query->count();
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
