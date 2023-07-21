@extends('layouts.index')
    <div class="container">
        <h1>Enter New Password!</h1>
        <form method="POST" action="{{route('update-password')}}">
            @csrf
            <input type="password" name="new_password" placeholder="Enter the new password!" class="form-control mt-4">
            <span class="text-danger d-flex justify-content-start">@error('new_password')
                {{$message}}
            @enderror</span>
            <input type="password" name="new_password_confirmation" placeholder="Repeat the new password!" class="form-control mt-4">
            <span class="text-danger d-flex justify-content-start">@error('new_password_confirmation')
                {{$message}}
            @enderror</span>
            <button type="submit" class="btn btn-success d-flex justify-content-center mt-4">Update</button>
        </form>
    </div>