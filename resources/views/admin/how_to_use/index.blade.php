@extends('layouts.dashboard_app')
@section('title')
    How to use | Dashboard
@endsection
@section('use')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">How to use</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>How to use </h5>
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
                                    <a href="{{ route('homehowtouseheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_use'))
                    <div class="alert alert-danger">{{ session('delete_use') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Step title</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uses as $use)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $use->stap_title }}</td>
                                <td>{{ $use->heading }}</td>
                                <td>{{ $use->description }}</td>
                                <td>
                                    <img style="height: 50px; width: 50px;" src="{{ asset('uploads/how_to_use') }}/{{ $use->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('use.show', $use->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('use.destroy', $use->id) }}" method="post">
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
                    @if (session('add_use'))
                    <div class="alert alert-success">{{ session('add_use') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add use process</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('use.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Step title</label>
                          <input type="text" class="form-control" name="stap_title" placeholder="Enter step title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" placeholder="Enter step heading">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control" placeholder="Enter step description"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
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