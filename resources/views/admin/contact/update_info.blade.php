@extends('layouts.dashboard_app')
@section('title')
Update | Contact info | Dashboard
@endsection
@section('contact')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('homecontactheading') }}">Contact info</a>
        <a class="breadcrumb-item active">Update Contact info</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Contact info</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('info_update'))
                    <div class="alert alert-success">{{ session('info_update') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Contact info</div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('homecontactinfoupdatepost', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" name="address" value="{{ $info->address }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <textarea name="email" rows="4" class="form-control" > {{ $info->email }}</textarea>
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