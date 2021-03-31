@extends('layouts.dashboard_app')
@section('title')
    Update | Count | Dashboard
@endsection
@section('homecount')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('homecount') }}">Count</a>
        <a class="breadcrumb-item active">Update Count</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Count</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('count_update'))
                    <div class="alert alert-success">{{ session('count_update') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Counter</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('homecountupdatepost', $count->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Count</label>
                          <input type="text" class="form-control" name="count" value="{{ $count->count }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Count title</label>
                          <input type="text" class="form-control" name="count_title" value="{{ $count->count_title }}">
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