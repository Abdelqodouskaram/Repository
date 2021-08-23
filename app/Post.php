<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillabe = ['tilte' , 'body'];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}


