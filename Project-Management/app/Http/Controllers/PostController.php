<?php
namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments.user')->latest()->get();

        return view('feed', compact('posts'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|max:255',
        ]);

        // Create a new post for the authenticated user
        $post = auth()->user()->posts()->create($request->only('content'));

        return redirect('/feed');
    }

    public function storeComment(Request $request, $postId)
    {
        // Validate the request
        $request->validate([
            'comment' => 'required|max:255',
        ]);

        // Find the post to which the comment belongs
        $post = Post::findOrFail($postId);

        // Create a new comment for the authenticated user
        $comment = new Comment([
            'content' => $request->input('comment'),
        ]);

        // Associate the comment with the post and user
        $comment->user()->associate(auth()->user());
        $post->comments()->save($comment);

        return redirect('/feed');
    }
}