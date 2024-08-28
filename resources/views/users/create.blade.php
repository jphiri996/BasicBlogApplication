@extends('layouts.admin')

@section('content')
    <h1>Blog Posts Create</h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Email Address</label>
            <input type="text" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="">Select a role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="author">Author</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Temp Password As "password"</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
@endsection