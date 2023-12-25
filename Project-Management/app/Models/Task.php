<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function scopePendingTask($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeOverdue($query)
    {
        return $query->where('due_date', '<', now())->where('status', '!=', 'completed');
    }

    public function scopeUrgentTask($query)
    {
        return $query->where('priority', 'urgent');
    }

    public function scopeTotalTask($query)
    {
        return $query->count();
    }
}
