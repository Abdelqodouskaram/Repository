<?php

namespace App\Repositories;

use App\Post;

class PostRepository implements PostRepositoryInterface
{
    
    public function get($post_id)
    {
        return Post::find($post_id);
    }

    public function all()
    {
        return Post::all();
    }
    
}