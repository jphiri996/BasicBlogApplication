@extends('layouts.app')

@section('content')
<h1>Delete Post</h1>
<p>Are you sure you want to delete the post titled "{{ $post->title }}"?</p>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Yes</button>
    <a href="{{ route('posts.index') }}">No</a>
</form>
@endsection
