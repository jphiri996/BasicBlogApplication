<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    
    public function store(Request $request)
    {
   
        $user = User::create($request->all());
        return redirect()->route('users.index');
    }

    
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

   
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    
    public function update(Request $request, User $user)
    {
     
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
