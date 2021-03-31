@extends('layouts.dashboard_app')
@section('title')
    Plane three | Dashboard
@endsection
@section('three')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Plane three</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Plane three</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Plane Parcent</th>
                                <th>Plane Time</th>
                                <th>Plane minimum price</th>
                                <th>Plane maximum price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $title->plan_parcent }}</td>
                                <td>{{ $title->plan_time }}</td>
                                <td>{{ $title->plan_minimum }}</td>
                                <td>{{ $title->plan_maximum }}</td>
                                <td>
                                    <a href="{{ route('homeplanthreetitleupdate', $title->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_plan'))
                    <div class="alert alert-danger">{{ session('delete_plan') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Plan item</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($threes as $three)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $three->plan_item }}</td>
                                <td>
                                    <a href="{{ route('three.show', $three->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('three.destroy', $three->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_plan'))
                    <div class="alert alert-success">{{ session('add_plan') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add plan item</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('three.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan item</label>
                          <input type="text" class="form-control" name="plan_item" placeholder="Enter plane item">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection