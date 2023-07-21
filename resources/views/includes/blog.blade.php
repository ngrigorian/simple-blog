@extends('layouts.index')


<div class="container">
    <h1>Blog</h1>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('images/' . $post->image) }}" class="card-img-top" alt="Post Image">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('edit', ['id' => $post->id]) }}" class="btn btn-dark">Edit</a>
                    <form action="{{ route('delete', ['id' => $post->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
