@extends('layouts.app')

@section('main')

   <!--  <a class="create" href="{{route('comics.create')}}"><span>Add Comic</span></a> -->

 <div class="cards">
    @foreach($comics as $comic)
        <div class="card">
            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}"> 
            </a>
            <div class="details">
               
                <a href="{{route('comics.show', ['comic' => $comic->id])}}">Details</a>
            </div>
            
        </div>
    @endforeach
    <a class="create" href="{{route('comics.create')}}"><span>Add Comic</span></a>
 </div>
 
    
@endsection