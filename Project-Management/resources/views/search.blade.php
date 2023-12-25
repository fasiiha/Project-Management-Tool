@extends('layouts.layout')
@section('title', 'Search Page')

@section('content')
    <div class="container">
        <form action="/search" method="post">
            @csrf
            <label for="query">Search:</label>
            <input type="text" name="query" id="query">
            <button type="submit">Search</button>
        </form>
    </div>


    <div class="container text-white">
        <h2>Search Results</h2>

        @if($users->count() > 0)
            <h3>Users</h3>
            @foreach($users as $user)
                <p>{{ $user->username }}</p>
            @endforeach
        @endif

        @if($tasks->count() > 0)
            <h3>Tasks</h3>
            @foreach($tasks as $task)
                <p>{{ $task->name }}</p>
            @endforeach
        @endif

        @if($projects->count() > 0)
            <h3>Projects</h3>
            @foreach($projects as $project)
                <p>{{ $project->project_name }}</p>
            @endforeach
        @endif

        @if($users->count() === 0 && $tasks->count() === 0 && $projects->count() === 0)
            <p>No results found.</p>
        @endif
    </div>
@endsection
