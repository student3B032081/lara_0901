<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $data = [
            'posts' => $posts,
        ];

        return view('posts.index', $data);
    }

    public function show(Post $post)
    {
        $data = [
            'post' => $post,
        ];

        return view('posts.show', $data);
    }


    public function store(PostRequest $request)
    {
        //
    }
    public function update(PostRequest $request)
    {
        //
    }
}
