@extends('layouts.dashboard_app')
@section('title')
    Stand out | Dashboard
@endsection
@section('standout')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Stand out</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Stand out</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $heading->heading }}</td>
                                <td>{{ $heading->description }}</td>
                                <td>
                                    <a href="{{ route('standheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('item_delete'))
                    <div class="alert alert-danger">{{ session('item_delete') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Icon class</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($standouts as $standout)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $standout->icon }}</td>
                                <td>{{ $standout->heading }}</td>
                                <td>{{ $standout->description }}</td>
                                <td>
                                    <a href="{{ route('out.show', $standout->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('out.destroy', $standout->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_standout'))
                    <div class="alert alert-success">{{ session('add_standout') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Stand out</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('out.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Icon Class</label>
                          <input type="text" class="form-control" name="icon"  placeholder="Enter Icon class">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading"  placeholder="Enter Heading">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control" placeholder="Enter Description"></textarea>
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