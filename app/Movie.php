<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use App\Comment;

class Movie extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {   
        return $this->hasMany(Comment::class);
    }

    
}
