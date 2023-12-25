<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function scopeActiveProject($query)
    {
        // return $query->where('status', 'active');
        return $query->count();
    }

    public function scopeCompletedProject($query)
    {
        // return $query->where('status', 'completed');
        return $query->count();
    }

    public function scopeTotalProject($query)
    {
        return $query->count();
    }
}