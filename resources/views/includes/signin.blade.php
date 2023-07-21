@extends('layouts.index')
<div class="container">

    <body class="text-center">
        <form class="form-signin py-5" action="{{ route('login.store') }}" method="POST">
          @csrf
          <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
          <label  class="sr-only py-2 d-flex justify-content-start">Email<span class="text-danger">*</span></label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required="">
           <span class="text-danger d-flex justify-content-start">@error('email')
                   {{$message}}
               @enderror</span>
          <label class="sr-only py-2 d-flex justify-content-start">Password<span class="text-danger">*</span></label>
          <input type="password" id="inputPass" name="password" class="form-control" placeholder="Password" required="" autofocus="">
           <span class="text-danger d-flex justify-content-start">@error('password')
                   {{$message}}
               @enderror</span>
               <p class="py-2 d-flex justify-content-start"><a href="{{route('recover')}}">Forgot Password?</a></p>
          <button class="btn btn-lg btn-primary btn-block  mt-4" type="submit">Sign In</button>
          <p class="mt-5 mb-3 text-muted fixed-bottom">© 2023</p>
        </form>
      
    
    </body>
</div>