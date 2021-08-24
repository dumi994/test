@extends('layout.app')

@section('title', 'Add a Movie')

@section('content')
<h1>Add a Movie</h1>
<div class="container">
  <form action="{{route('movies.update', $movie->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Add a title" aria-describedby="nameHelper" value="{{$movie->name}}">
      <small id="titleHelper" class="text-muted">Add your product title here</small>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" name="description" id="description" class="form-control" placeholder="Add a description" aria-describedby="descriptionHelp" value="">{{$movie->description}}</textarea>
    </div>

    <div class="form-group">
      <h4>Current image</h4>
      <img src="{{$movie->image}}" alt="">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="url" name="image" id="image" class="form-control" placeholder="Add the url for a cover image" aria-describedby="helpId" value="{{$movie->image}}">
      <small id="imageHelper" class="text-muted">Type the url for a cover image</small>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" name="price" id="price" class="form-control" placeholder="Add the price" aria-describedby="helpId" value="{{$movie->price}}">
      <small id="priceHelper" class="text-muted">Type tprice</small>
    </div>
    <!-- <input  class="btn btn-primary" type="submit"> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
   
@endsection