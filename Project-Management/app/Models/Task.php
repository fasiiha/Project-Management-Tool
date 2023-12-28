<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_name',
        'description',
        'member_name',
        'project_id',
        'status',
        'due_date',
        
    ];
    public function scopePendingTask($query, $username)
    {
        
        return $query->where('status', 'pending')->where('member_name',$username)->count(); 
    }

    public function scopeOverdue($query, $username)
    {
        return $query->where('due_date', '<', now())->where('status', '!=', 'completed')->where('member_name',$username)->count();
    }

    public function scopeUrgentTask($query, $username)
    {
        return $query->where('status', 'urgent')->where('member_name',$username)->count();
    }

    public function scopeTotalTask($query, $username)
    {
        return $query->where('member_name',$username)->count();
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'id');
    }
}
