<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('posts.posts');
    }
    
    public function store(Request $request){
        
        $request->validate([
            'fieldname.required' => 'Please provide a value for the :attribute field.',
            'title' => 'required|max:55|min:2',
            'description' => 'required|max:255|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        }
        
        $post = new Post;
    
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image = $imagePath;

        $save = $post->save();
        
        return redirect('blog');
    }
}
