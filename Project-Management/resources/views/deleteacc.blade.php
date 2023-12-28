@extends('layouts.layout')
@section('title', 'Search Page')

@section('content')
    <div class="container mt-5">
        {{-- @csrf
        <a href="{{ route('delete.index') }}"><i class="zmdi zmdi-comment-more"></i> Delete Account </a> --}}

  
        <form method="post" action="{{ route('users.delete', ['user' => $user]) }}">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to delete the user {{ $user->username }}?</p>
            <input type="submit" class="btn" value="Delete" name="delete" style="font-size: 60%;">
        </form>

        <!-- delete_user.blade.php -->

        
    </div>
   
    
@endsection
