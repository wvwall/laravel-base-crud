@extends('layouts.app')

@section('main')
        <div>
            <form  class="card-form" action="{{route('comics.update',['comic'=>$comic->id])}}" method="post">
                @csrf 
                @method('PATCH')
                <input type="text" name="title" value="{{$comic->title}}" id="">
                <input type="text" name="description" value="{{$comic->description}}" id="">
                <input type="text" name="thumb" value="{{$comic->thumb}}"id="">
                <input type="number" name="price" value="{{$comic->price}}"  id="">
                <input type="text" name="series" value="{{$comic->series}}" id="">
                <input type="date" name="sale_date" value="{{$comic->sale_date}}"  id="">
                <input type="text" name="type" value="{{$comic->type}}"  id="">

                <input type="submit" value="SEND" >
            </form>
            <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
                @csrf 
                @method('DELETE')
                <input type="submit" value="DELETE">
            </form>
               
        </div>
   
       
@endsection