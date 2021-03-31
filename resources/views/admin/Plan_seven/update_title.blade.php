@extends('layouts.dashboard_app')
@section('title')
    Update | Plane seven title | Dashboard
@endsection
@section('seven')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('seven.index') }}"> Plane seven</a>
        <a class="breadcrumb-item active">Update Plane seven title</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Plane seven title</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_title'))
                    <div class="alert alert-success">{{ session('update_title') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Plan title</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('homeplanseventitleupdatepost', $title->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan parcent</label>
                          <input type="text" class="form-control" name="plan_parcent" value="{{ $title->plan_parcent }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Time</label>
                          <textarea name="plan_time" rows="4" class="form-control">{{ $title->plan_time }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Minimum price</label>
                          <input type="text" class="form-control" name="plan_minimum" value="{{ $title->plan_minimum }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Maximum price</label>
                          <input type="text" class="form-control" name="plan_maximum" value="{{ $title->plan_maximum }}">
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