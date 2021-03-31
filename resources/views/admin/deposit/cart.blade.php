@extends('layouts.dashboard_app')
@section('title')
    Cart | Deposit | Dashboard
@endsection
@section('deposit')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active"> Deposit Cart</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Cart | Deposit</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-la-12 p-5 m-auto">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-primary">Proccess</a>
                        <a href="#" class="btn btn-danger">Cancle</a>
                      </div>
                </div>
                <div class="col-lg-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>plan</th>
                                <th>{{ $plan_name }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Profit</td>
                                <td>{{ $plan_title->plan_parcent }}% Daily for {{ $plan_title->plan_time }} days</td>
                            </tr>
                            <tr>
                                <td>Deposit Return</td>
                                <td>100% after completion</td>
                            </tr>
                            <tr>
                                <td>Cancel Deposit</td>
                                <td>Available with 10% fee (After min 24 hours)</td>
                            </tr>
                            <tr>
                                <td>Debit Amount</td>
                                <td> ${{ $amount }}</td>
                            </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
