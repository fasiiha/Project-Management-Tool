<?php

namespace App\Http\Middleware;
use Closure;
use App\Models\Post;
use Illuminate\Http\Request;

class CheckProjectMembership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Assuming you have a 'project' relationship in your User model
        $user = auth()->user();
        $postId = $request->route('post'); // Adjust this based on your route structure

        if ($postId) {
            $post = Post::findOrFail($postId);

            // Check if the authenticated user belongs to the same project as the post's user
            if ($user->project_id !== $post->user->project_id) {
                abort(403, 'Unauthorized');
            }
        }

        return $next($request);
    }
}
