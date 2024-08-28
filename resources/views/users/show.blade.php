@extends('layouts.admin')

@section('content')
    <h1>Blog Posts Details</h1>
    <a href="{{ url()->previous()}}">Back</a> 
    <ul>
            <li>ID: {{ $user->id}} </li>
            <li>Name: {{ $user->name}}</li>
            <li>Email Address: {{ $user->email}}</li>
            <li>Role: {{ $user->role}}</li>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
            <p>
            <a href="{{ route('users.delete', $user->id) }}">Delete User</a>
            </p>
    </ul>
   
@endsection