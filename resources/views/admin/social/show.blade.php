@extends('layouts.dashboard_app')
@section('title')
    Update | social | Dashboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('social.index') }}">Social</a>
        <a class="breadcrumb-item active">Update Social</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Social</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_social'))
                    <div class="alert alert-success">{{ session('update_social') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update social</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('social.update', $info->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Social Icon</label>
                          <input type="text" class="form-control" name="social_icon" value="{{ $info->social_icon }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Social Link</label>
                          <textarea name="social_link" rows="4" class="form-control" > {{ $info->social_link }}</textarea>
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