@extends('layouts.dashboard_app')
@section('title')
    Update | Plane seven item | Dashboard
@endsection
@section('seven')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('seven.index') }}">Plane seven</a>
        <a class="breadcrumb-item active">Update Plane seven item</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Plane seven item</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_plan'))
                    <div class="alert alert-success">{{ session('update_plan') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update plan item</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('seven.update', $info->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan item</label>
                          <input type="text" class="form-control" name="plan_item" value="{{ $info->plan_item }}">
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