<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Comment;

class Post extends Model
{
    protected $fillable = ['content'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
