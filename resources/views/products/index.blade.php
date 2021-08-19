@extends('layout.app')

@section('title', 'Products Page')

@section('content')
    <h1>Products</h1>
    <div class="container d-flex flex-wrap">
    @foreach($comics as $index => $comic)
        <div class="card ">
            <a href="{{route('comic', ['id' => $index])}}">
                <div class="card-top text-center">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h3>{{$comic['series']}}</h3>
                </div>
                
                <div class="card-bottom text-center">
                    <p>Price: {{$comic['price']}}</p>
                </div>
            </a>
        </div>    
        @endforeach
    </div>
@endsection