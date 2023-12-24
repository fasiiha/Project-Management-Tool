@extends('layouts.app') 

@section('content')
    @foreach($posts as $post)
        <div>
            <p>{{ $post->content }}</p>
            <p>Posted by: {{ $post->user->name }}</p>
        </div>
    @endforeach

    <form action="{{ route('feed.store') }}" method="post">
        @csrf
        <textarea name="content" rows="4" placeholder="Share something..."></textarea>
        <button type="submit">Post</button>
    </form>
@endsection
