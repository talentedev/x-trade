@extends('layouts.dashboard_app')
@section('title')
    Update | Plane one item | Dashboard
@endsection
@section('one')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('one.index') }}">Plane one</a>
        <a class="breadcrumb-item active">Update Plane one item</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Plane one item</h5>
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
                    <form method="POST" action="{{ route('one.update', $info->id) }}">
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