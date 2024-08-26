<!-- resources/views/admin/users/edit.blade.php -->
@extends('layouts.admin_layout')

@section('content')
<h1>Edit User</h1>
<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
