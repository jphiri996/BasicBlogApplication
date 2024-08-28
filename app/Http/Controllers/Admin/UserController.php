<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
       
       $users = User::all();
       

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
         }
 
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
     
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:user,author,admin'
        ]);
    
        // Prepare data for creation
        $userData = $request->only(['name', 'email', 'role']);
        $userData['password'] = bcrypt($request->input('password')); // Hash the password
    
        // Create the user
        User::create($userData);
    
        // Redirect with success message
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:user,author,admin'
        ]);

        // Prepare data for update
        $userData = $request->only(['name', 'email', 'role']);
        
        // If a password is provided, hash it
        if ($request->filled('password')) {
            $userData['password'] = bcrypt($request->input('password'));
        }

        // Update the user
        $user->update($userData);

        // Redirect with success message
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function delete(User $user)
    {
        return view('users.delete', compact('user'));
    }
    
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
