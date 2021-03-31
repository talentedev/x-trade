@extends('layouts.dashboard_app')
@section('title')
    Update | Referral | Program | Dashboard
@endsection
@section('homereferralprogram')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('homereferralprogram') }}">Referral program</a>
        <a class="breadcrumb-item active">Update Referral program</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Referral | Program</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_program'))
                    <div class="alert alert-success">{{ session('update_program') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Program</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('homereferralprogramupdatepost', $program->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $program->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $program->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <img style="height: 100px; width: 100px;" src="{{ asset('uploads/program') }}/{{ $program->thumbnail }}" alt="">
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