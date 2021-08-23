<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;


class PostController extends Controller
{
    protected $post;

    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function index()
    {

        $data = [
            'posts' => $this->post->all()
        ];

        return view('index', $data);

    }

    public function show($id)
    {
        $data = [
            'post' => $this->post->get($id)
        ];

        return view('show', $data);
    }
}
