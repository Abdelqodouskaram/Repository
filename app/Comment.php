<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillabe = ['body' , 'post_id'];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
