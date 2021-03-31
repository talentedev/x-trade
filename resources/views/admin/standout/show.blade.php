@extends('layouts.dashboard_app')
@section('title')
    Update | Stand out | Dashboard
@endsection
@section('standout')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('out.index') }}">stand out</a>
        <a class="breadcrumb-item active">update stand out</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update stand out</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_standout'))
                    <div class="alert alert-success">{{ session('update_standout') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update stand out</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('out.update', $detail->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Icon Class</label>
                          <input type="text" class="form-control" name="icon" value="{{ $detail->icon }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $detail->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $detail->description }}</textarea>
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