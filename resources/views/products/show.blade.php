@extends('layout.app')

@section('title', 'Shop a Comic')

@section('content')
    
    <!-- <h1>{{$comic['title']}}</h1> -->
    
    

    <div class="container p-2 justify-content-center">
        <div class="show-card">
        <div class="card-top text-center">
            <img src="{{$comic['thumb']}}" alt="">
            <h3>{{$comic['series']}}</h3>
        </div>
        <div class="card-bottom text-center">
            <span>Add to shop</span>
            <a href=""><p class="">Price: {{$comic['price']}}</p></a>
        </div>     
    </div> 
    </div>
          
@endsection