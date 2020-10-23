<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany('App\Models\PostComments', 'post_id', 'id');
    }

    public function alllikes()
    {
        return $this->hasMany('App\Models\PostLikes', 'post_id', 'id');
    }
} 
