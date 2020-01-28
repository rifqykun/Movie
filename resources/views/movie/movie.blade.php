@extends('template.layout')

@section('contentadmin')
<div class="container">
<h3>Movie List Data</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Cast</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($movie as $m)
            <tr>
                <td style="cursor:pointer"><a href="{{url('/detail')}}/{{$m->id}}">{{$m->title}}</a></td>
                <td>{{$m->description}}</td>
                <td>{{$m->cast}}</td>
                <td>{{$m->city->city}}</td>
                <td>
                    <a class="btn btn-warning" href="{{url('/editmovie')}}/{{$m->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('/delete')}}/{{$m->id}}" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection