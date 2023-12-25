<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'project_id',
        'status',
        'due_date',
        
    ];
    public function scopePendingTask($query)
    {
        // return $query->where('status', 'pending');
        return $query->count();
    }

    public function scopeOverdue($query)
    {
        // return $query->where('due_date', '<', now())->where('status', '!=', 'completed');
        return $query->count();
    }

    public function scopeUrgentTask($query)
    {
        // return $query->where('priority', 'urgent');
        return $query->count();
    }

    public function scopeTotalTask($query)
    {
        return $query->count();
    }
}
