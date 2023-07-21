@extends('layouts.index')
   <style>
    a{
        text-decoration: none;
    }
    a:hover{
        color: green;
        transition: all 1s;
    }
   </style>
<div class="container">
    <h1 class="d-flex justify-content-center mt-4">Confirm Your Mail and get the code!</h1>
    <form method="POST" action="{{ route('sendEmail') }}">
      @csrf
      <div class="form-group">
        <input type="email" name="email" placeholder="Complete Your Email" class="form-control mt-4" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success d-flex justify-content-center mt-4">Submit</button>
      </div>
    </form>
  </div>
  