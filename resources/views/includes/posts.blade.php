@extends('layouts.index')

<style>
  .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>

<div class="container">
  <h2 class="text-center py-4">Add Post</h2>
  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title" class="py-2">Title:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="title" name="title" required>
      <span class="text-danger d-flex justify-content-start">@error('title')
        {{$message}}
    @enderror</span>
    </div>
    <div class="form-group">
      <label for="description" class="py-2">Description:<span class="text-danger">*</span></label>
      <textarea class="form-control" id="description" name="description" required></textarea>
      <span class="text-danger d-flex justify-content-start">@error('description')
        {{$message}}
    @enderror</span>
    </div>
    <div class="form-group py-4">
      <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
      <span class="text-danger d-flex justify-content-start">@error('image')
        {{$message}}
    @enderror</span>
    </div>
  
    <button type="submit" class="btn btn-success">Add Post</button>
  </form>
</div>






  