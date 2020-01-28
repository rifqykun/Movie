@extends('template.layout')

@section('contentadmin')
<div class="container">
<h3>City List Data</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($city as $c)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$c->city}}</td>
                <td>
                    <a class="btn btn-warning" href="{{url('/editmovie')}}/{{$c->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{url('/delete')}}/{{$c->id}}" onclick="return confirm('Are you sure ?')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$city->links()}}
</div>
@endsection