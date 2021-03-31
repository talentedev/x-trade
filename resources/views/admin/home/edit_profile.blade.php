@extends('layouts.dashboard_app')
@section('title')
    Edit | Profile | Dashboard
@endsection
@section('dashboard')
    active
@endsection
@section('dashboard_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/home') }}">Home</a>
        <a class="breadcrumb-item active">Edit Profile</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Profile Edit</h5>
        </div><!-- sl-page-title -->
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @if (session('changename'))
                    <div class="alert alert-success">{{ session('changename') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Change Name</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('changename') }}" >
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Your Name</label>
                          <input type="text" class="form-control" name="name" value="{{ user()->name }}">
                        </div>
                        <button type="submit" class="btn btn-warning">Change Name</button>
                      </form>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    @if (session('profile_photo'))
                    <div class="alert alert-success">{{ session('profile_photo') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Profile Photo</div>
                        <div class="card-body">
                            
                  <form method="POST" action="{{ url('change/photo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Profile Photo</label>
                      <input type="file" class="form-control" name="profile_photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Photo</button>
                  </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="card  mt-5">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('change/password') }}">
                                @csrf
                                @if (session('same_pass'))
                                <div class="alert alert-danger">
                                    {{ session('same_pass') }}
                                </div>
                                @endif
                                @if (session('not_match'))
                                <div class="alert alert-danger">
                                    {{ session('not_match') }}
                                </div>
                                @endif
                                @if (session('chang_pass'))
                                <div class="alert alert-success">
                                    {{ session('chang_pass') }}
                                </div>
                                @endif
                                <div class="form-group">
                                  <label>Enter Old Password</label>
                                  <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                                </div>
                                <div class="form-group">
                                  <label>Enter New Password</label>
                                  <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                  <label>Retype Password</label>
                                  <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Old Password">
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                              </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
    
@endsection