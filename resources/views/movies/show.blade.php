@extends('layout.app')

@section('title', 'Shop a Movie')

@section('content')
    
    

    <div class="container p-2 justify-content-center">
        <div class="show-card">
                <div class="card-top text-center">
                    <img src="{{$movie->image}}" alt="">
                    <h3>{{$movie->name}}</h3>
                </div>
                <!-- <div class="card-bottom text-center">
                    <span>Add to shop</span>
                    <a href=""><p class="">Price: {{$movie->price}}</p></a>
                </div>   -->   
                <div class="form-group d-flex justify-content-center container">
                        <button class="buttons btn btn-primary text-white m-r-1"><a href="{{route('movies.edit', $movie->id)}}" class="text-white">Edit</a></button>
                    
                        <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn buttons btn-danger">Delete </button>
                    </form>
    
                </div>
        </div> 
    </div>
     
@endsection