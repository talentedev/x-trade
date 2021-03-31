@extends('layouts.dashboard_app')
@section('title')
    Update | Payment method | Dashboard
@endsection
@section('method')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('payment.index') }}">Payment method</a>
        <a class="breadcrumb-item active">Update Payment method</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Payment method</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_method'))
                    <div class="alert alert-success">{{ session('update_method') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Payment method</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('payment.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Method title</label>
                          <input type="text" class="form-control" name="payment_title" value="{{ $info->payment_title }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Method Thumbnail</label>
                          <input type="file" class="form-control" name="payment_thumbnail">
                        </div>
                        <img style="height: 30px; width: 30px;" src="{{ asset('uploads/payment_method') }}/{{ $info->payment_thumbnail }}" alt="">
                        <br>
                        <br>
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