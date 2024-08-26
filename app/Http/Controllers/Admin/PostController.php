<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

  
    public function index()
    {
        $posts = Post::all();
        return view('admin.users', compact('posts'));
    }


    public function create()
    {
        return view('admin.create_user');
    }

  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Post::create($validatedData);
        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

  
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post->update($validatedData);
        return redirect()->route('posts.index');
    }

  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
