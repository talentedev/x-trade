@extends('layouts.dashboard_app')
@section('title')
    Update | Detail | About | Dashboard
@endsection
@section('aboutdetail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('aboutdetail') }}">Detail About</a>
        <a class="breadcrumb-item active">Update Detail About</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Detail | About</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('detail_update'))
                    <div class="alert alert-success">{{ session('detail_update') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update detail banner</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('updateaboutdetailpost', $detail->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Section Heading</label>
                          <input type="text" class="form-control" name="section_heading" value="{{ $detail->section_heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $detail->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $detail->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Video Link</label>
                          <textarea name="video_link" rows="4" class="form-control">{{ $detail->video_link }}</textarea>
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