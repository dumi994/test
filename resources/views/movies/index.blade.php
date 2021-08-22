@extends('layout.app')

@section('title', 'Movies')

@section('content')
<h1>Movies</h1>
    <div class="container text-white d-flex flex-wrap">
        @foreach($movies as $index => $movie)
        <div class="card">
            <a href="{{ route('movies.show', ['movie' => $index]) }}"> <!-- TOGLIERE --  PER DECOMMENTARE     -->
                <div class="card-top text-center">
                    <img src="{{$movie->image}}" alt="">
                    <h3>{{$movie->name}}</h3>
                </div>
                
                <div class="card-bottom text-center">
                    <p>Price: {{$movie->price}}</p>
                </div>
            </a>
            </div>  
        @endforeach
    </div>
@endsection