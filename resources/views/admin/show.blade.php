@extends('layouts.admin')

@section('content')
    <h1>Blog Posts Details</h1>
    <a href="{{ url()->previous()}}">Back</a> 
    <ul>
            <li>ID: {{ $post->id}} </li>
            <li>Title: {{ $post->title}}</li>
            <li>Content: {{ $post->content}}</li>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <p>
            <a href="{{ route('posts.delete', $post->id) }}">Delete Post</a>
            </p>
    </ul>
   
@endsection