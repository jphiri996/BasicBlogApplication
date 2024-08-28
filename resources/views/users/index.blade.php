@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{route('users.create') }}" class="btn btn-sm btn-outline-secondary">Create User</a>
          </div>
        </div>
    </div>

      
    <div>
    
        <ul>
            @foreach ($users as $user)
                <li>
                    <a href="{{route('users.show', $user->id) }}" > {{ $user->name }}
                </li>
            @endforeach
        </ul>
    </div>
    
@endsection