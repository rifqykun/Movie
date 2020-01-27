@extends('template.layout')

@section('contentadmin')
<div class="container">
    <h3 style="margin-left:25px">{{$movie->title}}</h3>
    <div class="col-md-12">
        <div class="col-md-4">
            <i class="fas fa-film fa-5x"></i>
        </div>
        <div class="col-md-4">
            <label for="">Description: </label>
            <label for="">{{$movie->description}}</label>
        </div>
        <div class="col-md-4">
            <label for="">Cast: </label>
            <label for="">{{$movie->cast}}</label>
        </div>
        <div class="col-md-4">
            <label for="">Genre: </label>
            <label for="">{{$movie->genre->genre}}</label>
        </div>
        <div class="col-md-4">
            <label for="">Show time: </label>
            <label for="">{{$movie->time->time}}</label>
        </div>
    </div>
</div>
@endsection