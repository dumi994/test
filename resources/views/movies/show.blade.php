@extends('layout.app')

@section('title', 'Shop a Movie')

@section('content')
    
    

    <div class="container p-2 justify-content-center">
        <div class="show-card">
            <a href="">


                <div class="card-top text-center">
                    <img src="{{$movie->image}}" alt="">
                    <h3>{{$movie->name}}</h3>
                </div>
                <div class="card-bottom text-center">
                    <span>Add to shop</span>
                    <a href=""><p class="">Price: {{$movie->price}}</p></a>
                </div>     
            </a>
    </div> 
    </div>
          
@endsection