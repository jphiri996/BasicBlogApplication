<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
       // dd(Post::factory()->create());
        $posts = Post::all();
       //$posts=Auth::user()->posts;

        return view('admin.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function show(Post $post)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
         }
 
        return view('admin.show', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
      
        $post->update($request->only(['title', 'content']));
    
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(Post $post)
    {
        return view('admin.delete', compact('post'));
    }

    
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
