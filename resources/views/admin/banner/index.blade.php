@extends('layouts.dashboard_app')
@section('title')
    Detail | Banner | Dashboard
@endsection
@section('bannerdetail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Detail banner</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail | Banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading one</th>
                                <th>Heading two</th>
                                <th>Description one</th>
                                <th>Description two</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $detail->heading_one }}</td>
                                <td>{{ $detail->heading_two }}</td>
                                <td>{{ $detail->description_one }}</td>
                                <td>{{ $detail->description_two }}</td>
                                <td>
                                    <a href="{{ route('updatebannerdetail', $detail->id) }}" class="btn btn-info">Update</a>
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
