@extends('layouts.app')

@section('main')
<div class="spacee"></div>
        <div class="card-form">        
            <form  class="form" action="{{route('comics.update',['comic'=>$comic->id])}}" method="post">
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
            
               
        </div>
   
       
@endsection