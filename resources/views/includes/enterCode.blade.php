@extends('layouts.index')

<style>
    a {
        text-decoration: none;
    }

    a:hover {
        color: green;
        transition: all 1s;
    }
</style>

<div class="container">
    <h1 class="d-flex justify-content-center mb-4">Confirm Your Mail and Enter the Code!</h1>
    <form method="POST" action="{{ route('confirmEmail') }}">
        @csrf
        <div class="form-group">
            <label for="verification_code">Enter the 6-digit Code:</label>
            <input type="text" name="verification_code" id="verification_code" class="form-control">
        </div>
        <button type="submit" class="btn btn-success d-flex justify-content-center mt-4" name="verify">Verify Code</button>
    </form>
</div>