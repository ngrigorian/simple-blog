<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class EditController extends Controller
{
    public function edit($id)
    {
      
        $post = Post::find($id);

       
        return view('edit.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        
        $post = Post::find($id);

       
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
       
        $post->save();

        
        return redirect('blog');
    }
}
