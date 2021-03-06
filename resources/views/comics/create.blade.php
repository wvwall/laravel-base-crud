@extends('layouts.app')

@section('main')
<div class="spacee">
    <a class="home" href="{{route('comics.index')}}"><span>HOME</span></a>
</div>
@if ($errors->any())  
 <div class="alert alert-danger"> 
    <ul>
        @foreach ($errors->all() as $error)    
            <li>{{$error}}</li>
        @endforeach
    </ul> 
</div>@endif
        <div class="card-form">
            <form  class="form" action="{{route('comics.store')}}" method="post">
                @csrf 
                @method('POST')
                <input type="text" name="title" placeholder="Title" id="">
                <input type="text" name="description" placeholder="Description" id="">
                <input type="text" name="thumb" placeholder="Image" id="">
                <input type="number" name="price" placeholder="Price" id="">
                <input type="text" name="series" placeholder="Series" id="">
                <input type="date" name="sale_date" placeholder="Date" id="">
                <input type="text" name="type" placeholder="Comic book" id="">

                <input class="send" type="submit" value="SEND" name=>
            </form>
               
        </div>
   
       
@endsection