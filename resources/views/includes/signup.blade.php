@extends('layouts.index')



<div class="container">
    <body class="text-center">
        <form class="form-signin py-5" action="{{ route('register.store') }}" method="POST">
          @csrf
          <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
          <label  class="sr-only py-2 d-flex justify-content-start">Name<span class="text-danger">*</span></label>

          <input type="text" id="name" name="name" class="form-control" placeholder="User Name" value="{{ old('name') }}" required="" autofocus="">
               <span class="text-danger d-flex justify-content-start">@error('name')
                   {{$message}}
               @enderror</span>
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
          <label  class="sr-only py-2 d-flex justify-content-start">Confirm Password<span class="text-danger">*</span></label>

          <input type="password" id="inputcPass" name="confPassword" class="form-control" placeholder="Confirm Password" required="" autofocus="">
          <span class="text-danger d-flex justify-content-start">@error('confPassword')
                   {{$message}}
               @enderror</span>
          <div class="checkbox mb-3 py-2">
            <label>
              <input type="checkbox" value="remember-me" name="agreement" id="agreement"> Remember me<span class="text-danger">*</span>
              <span class="text-danger d-flex justify-content-start">@error('agreement')
                   {{$message}}
               @enderror</span>
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
          <p class="mt-5 mb-3 text-muted fixed-bottom">© 2023</p>
        </form>
    </body>
</div>