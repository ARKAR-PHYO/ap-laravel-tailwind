<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('post.postIndex', ['posts' => Post::orderBy('id', 'DESC')->get()]);
    }

    public function create()
    {
        return view('post._create', ['categories' => Category::all(), 'post' => new Post()]);
    }

    public function store(PostRequest $request)
    {
        Post::create($request->only('name', 'description'));

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('post._show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post._edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->only('name', 'description'));
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
