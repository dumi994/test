@extends('layout.app')

@section('title', 'Add a Movie')

@section('content')
<h1>Add a Movie</h1>
<div class="container">
  
  <form action="{{route('movies.store')}}" method="POST">
    @csrf
    
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Add a title" aria-describedby="nameHelper">
      <small id="titleHelper" class="text-muted">Add your product title here</small>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" name="description" id="description" class="form-control" placeholder="Add a description" aria-describedby="descriptionHelp"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="url" name="image" id="image" class="form-control" placeholder="Add the url for a cover image" aria-describedby="helpId">
      <small id="imageHelper" class="text-muted">Type the url for a cover image</small>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" name="price" id="price" class="form-control" placeholder="Add the price" aria-describedby="helpId">
      <small id="priceHelper" class="text-muted">Type tprice</small>
    </div>
    <!-- <input  class="btn btn-primary" type="submit"> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
   
@endsection