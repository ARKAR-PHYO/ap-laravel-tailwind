<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.homeIndex', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('home._create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        Post::create($request->all());

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
