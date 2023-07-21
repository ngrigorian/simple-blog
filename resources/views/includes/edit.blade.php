@extends('layouts.index')


    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('update', ['id' => $post->id]) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $post->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-dark mt-3">Update</button>
        </form>
    </div>

