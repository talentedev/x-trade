@extends('layouts.dashboard_app')
@section('title')
    Logo | Dashboard
@endsection
@section('logo')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Logo</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Logo</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="height: 50px; width: 100px;" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('logoupdate', $logo->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection