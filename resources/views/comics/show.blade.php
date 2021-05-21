@extends('layouts.app')

@section('main')
    
<div class="space"></div>
        <div class="card-single">
           
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
          
               
                <div class="details-single">
                    <h3>{{$comic->title}}</h3>
                    <h4>{{$comic->type}} - {{$comic->price}}$ - {{$comic->series}}</h4>
                    <h5>{{$comic->sale_date}}</h5>
                    <p>{{$comic->description}}</p>
                </div>
        </div>
        <div class="buttons">
            <a class="edit" href="{{route('comics.edit', ['comic' => $comic->id])}}"><span>EDIT COMIC</span></a>
            <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
                @csrf 
                @method('DELETE')
                <input class="delete" onclick="return confirm('SEI SICURO COMPA?')" type="submit" value="DELETE">
            </form>
        </div>
        
        
        

@endsection