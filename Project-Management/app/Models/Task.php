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
        'project_id',
        'status',
        'due_date',
        
    ];
    public function scopePendingTask($query)
    {
        return $query->where('status', 'pending')->count(); 
    }

    public function scopeOverdue($query)
    {
        return $query->where('due_date', '<', now())->where('status', '!=', 'completed')->count();
    }

    public function scopeUrgentTask($query)
    {
        return $query->where('status', 'urgent')->count();
    }

    public function scopeTotalTask($query)
    {
        return $query->count();
    }
}
