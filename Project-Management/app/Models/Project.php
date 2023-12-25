<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function scopeActiveProject($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeCompletedProject($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeTotalProject($query)
    {
        return $query->count();
    }
}