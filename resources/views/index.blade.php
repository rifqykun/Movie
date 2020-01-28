@extends('template.layout')

@section('contentadmin')
<div class="container">
        <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Film</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-film fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                        <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- table movie -->
<div class="container">
<h3>Movie List</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Cast</th>
                <th>City</th>
                <th>Genre</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($movie as $m)
            <tr>
                <td style="cursor:pointer"><a href="{{url('/detail')}}/{{$m->id}}">{{$m->title}}</a></td>
                <td>{{$m->description}}</td>
                <td>{{$m->cast}}</td>
                <td>{{$m->city->city}}</td>
                <td>{{$m->genre->genre}}</td>
                <td>{{$m->time->time}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
