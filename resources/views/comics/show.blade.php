@extends('layouts.app')

@section('main')
    
    <a href="{{route('comics.edit', ['comic' => $comic->id])}}">-EDIT</a>
        <div class="card-single">
            <a href="">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h3>{{$comic->title}}</h3>
                <h4>{{$comic->type}} - {{$comic->price}}$ - {{$comic->series}}</h4>
                <h5>{{$comic->sale_date}}</h5>
                <p>{{$comic->description}}</p>
                
            </a>
        </div>
        

@endsection