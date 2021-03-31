@extends('layouts.dashboard_app')
@section('title')
    Update | Logo | Dashboard
@endsection
@section('logo')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('homelogo') }}">Logo</a>
        <a class="breadcrumb-item active">Update Logo</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Logo</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('update_logo'))
                    <div class="alert alert-success">{{ session('update_logo') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Logo</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('logoupdatepost', $logo->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Update Logo</label>
                          <input type="file" class="form-control" name="logo">
                        </div>
                        <img style="height: 30px; width: 50px;" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection