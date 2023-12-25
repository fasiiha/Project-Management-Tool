@extends('layouts.layout')
@section('title', 'Search Page')

@section('content')
    <div class="container mt-5">
        <form action="/searchresult" method="post">
            @csrf
            <label for="query" style="color:aliceblue">Search: </label>
            <input type="text" name="query" id="query">
            <button type="submit">Search</button>
        </form>
    </div>


    <div class="container text-white mt-4">
        <h2>Search Results</h2>

        @if ($users->count() > 0)
            <h3>Users</h3>
            @foreach ($users as $user)
                <p>{{ $user->id }}: {{ $user->username }}</p>
            @endforeach
        @endif

        @if ($tasks->count() > 0)
            <h3>Tasks</h3>
            @foreach ($tasks as $task)
                <p style="margin-left: 5%">id {{ $task->id }}: {{ $task->name }}</p>
            @endforeach
        @endif

        @if ($projects->count() > 0)
            <h4 class="mt-3">Projects</h4>
            @foreach ($projects as $project)
                <div style="margin-left: 5%">
                    <p>id {{ $project->id }}: {{ $project->project_name }}</p>
                    <form action="{{ route('projects.details') }}" method="POST">
                        @csrf
                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                        <input type="submit" class="btn" value="Details" name='details'
                            style="font-size: 80%; margin-bottom: 5%;">
                    </form>
                </div>
            @endforeach
        @endif

        @if ($users->count() === 0 && $tasks->count() === 0 && $projects->count() === 0)
            <p>No results found.</p>
        @endif
    </div>
@endsection
