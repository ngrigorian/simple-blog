<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect('blog');
    }
}