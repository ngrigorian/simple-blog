<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function show(){
        $posts = Post::all();

        return view('home.home', compact('posts'));
    }
}
