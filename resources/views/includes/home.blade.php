@extends('layouts.index')


<div class="container">
    <h1>Home</h1>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('images/' . $post->image) }}" class="card-img-top" alt="Post Image">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>