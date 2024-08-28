@extends('layouts.admin')

@section('content')
<h1>Delete User</h1>
<p>Are you sure you want to delete the user by the name of  "{{ $user->name }}"?</p>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Yes</button>
    <a href="{{ route('users.index') }}">No</a>
</form>
@endsection