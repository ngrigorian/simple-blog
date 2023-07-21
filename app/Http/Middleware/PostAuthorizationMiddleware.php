<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostAuthorizationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $postId = $request->route('id');
        $post = Post::find($postId);

        if (!$post) {
            return redirect()->back();
        }

        $user = Auth::user();

        if ($user->role === 'admin' || $post->user_id === $user->id) {
            return $next($request);
        }

        return redirect()->back();
    }
}
