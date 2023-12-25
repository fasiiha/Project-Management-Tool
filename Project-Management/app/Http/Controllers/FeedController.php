<?php

namespace App\Http\Controllers;
use App\Models\FeedItem;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function showFeed()
{
    // Ensure the user is authenticated
    $this->middleware('auth');

    $user = auth()->user(); // Retrieve the authenticated user
    $feedItems = $user->feedItems()->with('user', 'comments.user')->latest()->get();

    return view('feed.index', compact('feedItems'));
}


public function postContent(Request $request)
{
    $request->validate([
        'content' => 'required',
    ]);

    $user = Auth::user();
    $feedItem = $user->feedItems()->create([
        'content' => $request->input('content'),
    ]);
    return redirect()->route('feed.show');
}

public function postComment(Request $request, FeedItem $feedItem)
{
    $request->validate([
        'content' => 'required',
    ]);

    $user = Auth::user();
    $comment = $feedItem->comments()->create([
        'user_id' => $user->id,
        'content' => $request->input('content'),
    ]);

    // Optionally, you can broadcast an event to notify other users in real-time.

    return redirect()->route('feed.show');
    
}
}
