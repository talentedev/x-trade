@extends('layouts.dashboard_app')
@section('title')
    Update | Detail | Banner | Dashboard
@endsection
@section('bannerdetail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('bannerdetail') }}">Detail Banner</a>
        <a class="breadcrumb-item active">Update Detail Banner</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Detail | Banner</h5>
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
                    <form method="POST" action="{{ route('updatebannerdetailpost', $detail->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading One</label>
                          <input type="text" class="form-control" name="heading_one" value="{{ $detail->heading_one }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading One</label>
                          <input type="text" class="form-control" name="heading_two" value="{{ $detail->heading_two }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description One</label>
                          <textarea name="description_one" rows="4" class="form-control">{{ $detail->description_one }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description two</label>
                          <textarea name="description_two" rows="4" class="form-control">{{ $detail->description_two }}</textarea>
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
