<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.homeIndex', ['posts' => Post::orderBy('id', 'DESC')->get()]);
    }

    public function create()
    {
        return view('home._create');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->only('name', 'description'));

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        return view('home._show', ['post' => Post::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('home._edit', ['post' => Post::findOrFail($id)]);
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
