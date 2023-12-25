@extends('layouts.layout')
@section('title', 'Search Page')

@section('content')
    <div class="container mt-5">
        @csrf
        <a href="{{ route('delete.index') }}"><i class="zmdi zmdi-comment-more"></i> Delete Account </a>

        {{-- <form method="post" action="{{ route('delete', ['username' => $user->username]) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn" value="Delete" name="delete" style="font-size: 80%; margin-bottom: 5%;">
        </form> --}}
    </div>
   
    
@endsection
