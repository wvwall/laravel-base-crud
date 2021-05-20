@extends('layouts.app')

@section('main')
    @foreach($comics as $comic)
        <div class="card">
            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h3>{{$comic->title}}</h3>
                <h4><>{{$comic->type}} - {{$comic->price}}$ - {{$comic->series}}</h4>
                <h5>{{$comic->sale_date}}</h5>
                <p>{{$comic->description}}</p>
            </a>
        </div>
    @endforeach
@endsection