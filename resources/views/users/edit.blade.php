@extends('layouts.admin')

@section('content')
<h1>Edit User</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
    </div>
    
    <div class="form-group">
        <label for="password">Password (Leave empty to keep current password)</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control" required>
            <option value="">Select a role</option>
            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="author" {{ $user->role === 'author' ? 'selected' : '' }}>Author</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
