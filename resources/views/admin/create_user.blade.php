@extends('layouts.admin_layout')

@section('content')
    <h1>Create User</h1>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <!-- Form fields go here -->
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection
