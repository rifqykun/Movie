@extends('template.layout')

@section('contentadmin')
<div class="container">
<h3>Movie List Data</h3>
<a class="btn btn-primary addmovie">Add Movie</a>
<br>
<br>
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

<!-- modal insert -->
<div id="box"></div>
<div class="container rounded border" id="modal-insert">
    <div class="panel-body">
        <h3 style="text-align:center; margin-top:5px">New Movie</h3>
        <form action="" method="POST" autocomplete="off" id="form-input">
            @csrf
            <div class="form-group">
            <label name="title">Nama produk</label>
                <input type="text" title="title" class="form-control @error('title') is-invalid invalid @enderror" placeholder="Title" value="{{old('name')}}">
                @error('title')
                    <span class="invalid"><i>{{$message}}</i></span>
                @enderror
            </div>							
            <div class="form-group">
            <label name="desc">Harga produk</label>
                <input type="text" name="desc" class="form-control @error('desc') is-invalid invalid @enderror" placeholder="Description" value="{{old('desc')}}">
                @error('desc')
                    <span class="invalid"><i>{{$message}}</i></span>
                @enderror
            </div>			
            <div class="form-group">
            <label name="cast">Stok produk</label>
                <input type="text" name="cast" class="form-control @error('cast') is-invalid invalid @enderror" placeholder="Cast" value="{{old('cast')}}">
                @error('cast')
                    <span class="invalid"><i>{{$message}}</i></span>
                @enderror
            </div>
            <div class="form-group">
            <label name="city">Categori produk</label>
			<select name="city" class="form-control @error('city') is-invalid invalid @enderror" placeholder="City">
            <option value="">Pilih Category</option>
                @foreach($city as $c)
                <option value="{{$c->id}}">{{$c->city}}</option>
                @endforeach
            </select>
			@error('category_id')
					span class="invalid"><i>{{$message}}</i></span>
			@enderror
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Add New Movie</button><span><a class="btn btn-warning cancel" style="margin-top:10px; margin-left:15px">Cancel</a></span>
        </form>
    </div>
</div>
@endsection