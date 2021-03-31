@extends('layouts.dashboard_app')
@section('title')
    Payment Method | Dashboard
@endsection
@section('method')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Paymetn Method</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Paymetn Method</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_method'))
                    <div class="alert alert-danger">{{ session('delete_method') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Method title</th>
                                <th>Method Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($methods as $method)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $method->payment_title }}</td>
                                <td>
                                    <img style="height: 50px; width: 50px;" src="{{ asset('uploads/payment_method') }}/{{ $method->payment_thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('payment.update', $method->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('payment.destroy', $method->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_method'))
                    <div class="alert alert-success">{{ session('add_method') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Payment Method</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Method title</label>
                          <input type="text" class="form-control" name="payment_title" placeholder="Enter method title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Method Thumbnail</label>
                          <input type="file" class="form-control" name="payment_thumbnail">
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