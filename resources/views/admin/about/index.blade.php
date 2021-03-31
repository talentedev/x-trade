@extends('layouts.dashboard_app')
@section('title')
    Detail | About | Dashboard
@endsection
@section('aboutdetail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Detail About</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail | About</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Section Heading</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Video Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $detail->section_heading }}</td>
                                <td>{{ $detail->heading }}</td>
                                <td>{{ Str::limit($detail->description, 100) }}</td>
                                <td>{{ $detail->video_link }}</td>
                                <td>
                                    <a href="{{ route('updateaboutdetail', $detail->id) }}" class="btn btn-info">Update</a>
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