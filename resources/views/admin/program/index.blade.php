@extends('layouts.dashboard_app')
@section('title')
    Referral | Program | Dashboard
@endsection
@section('homereferralprogram')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Referral Program</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Referral | Program</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $program->heading }}</td>
                                <td>{{ Str::limit($program->description, 100) }}</td>
                                <td>
                                    <img style="height: 200px; width: 200px;" src="{{ asset('uploads/program') }}/{{ $program->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('homereferralprogramupdate', $program->id) }}" class="btn btn-info">Update</a>
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