@extends('layouts.dashboard_app')
@section('title')
    Make | Deposit | Dashboard
@endsection
@section('deposit')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Make A Deposit</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Make | Deposit</h5>
        </div><!-- sl-page-title -->
        <form action="{{ route('deposit.cart') }}" method="post" id="selectForm">
            @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card bd-0">
                        <div class="card-header card-header-default  bg-dark">
                          SELECT INVESTMENT plan
                        </div><!-- card-header -->
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <section>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_01" name="d_item"  value="1">
                                       <label for="control_01">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Basic</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_one_title->plan_parcent }} {{ $plan_one_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan1 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_02" name="d_item" value="2">
                                       <label for="control_02">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Basic</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_two_title->plan_parcent }} {{ $plan_two_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan2 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_03" name="d_item" value="3">
                                       <label for="control_03">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Basic</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_three_title->plan_parcent }} {{ $plan_three_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan3 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_04" name="d_item" value="4">
                                       <label for="control_04">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Super</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_four_title->plan_parcent }} {{ $plan_three_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan4 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_05" name="d_item" value="5">
                                       <label for="control_05">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Super</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_five_title->plan_parcent }} {{ $plan_three_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan5 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_06" name="d_item" value="6">
                                       <label for="control_06">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Super</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_six_title->plan_parcent }} {{ $plan_three_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan6 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="radio" id="control_07" name="d_item" value="7">
                                       <label for="control_07">
                                        <div class="card bd-0 text-center">
                                            <div class="card-header text-center card-header-default bg-primary">
                                                <h4 class="m-auto">Super premium</h4>
                                            </div><!-- card-header -->
                                            <div class="card-body bd bd-t-0 rounded-bottom">
                                             <h5>{{ $plan_seven_title->plan_parcent }} {{ $plan_three_title->plan_time }}</h5>
                                                <ul style="padding-left:0; list-style:none">
                                                    @foreach ($plan7 as $plan_item)
                                                    <li>{{ $plan_item->plan_item }}</li>
                                                    @endforeach
                                                </ul>

                                            </div><!-- card-body -->
                                          </div><!-- card -->
                                        </label>
                                    </div>
                                </div>
                            </section>
                        </div><!-- card-body -->
                      </div><!-- card -->

                </div>
                <div class="col-lg-4">
                    <div class="card bd-0">
                        <div class="card-header card-header-default bg-dark">
                          </div><!-- card-header -->
                        <div class="card-body bd bd-t-0 rounded-bottom">

                                <div class="">
                                  <div id="slWrapper" class="parsley-select wd-100%">
                                    <select class="form-control select2" name="getwey" data-placeholder="Choose one"
                                    data-parsley-class-handler="#slWrapper"
                                    data-parsley-errors-container="#slErrorContainer" required>

                                      <option value="1">Perfect money</option>
                                      <option value="2">paypal</option>
                                      <option value="3">Usdt</option>
                                      <option value="4">Bitcoin</option>
                                      <option value="5">Ethrom</option>
                                      <option value="6">Payee</option>
                                    </select>
                                </div>
                                <input type="text" name="amount" class="form-control mt-4" placeholder=" $ | Ener amount 10-25000">
                                  <div class="mg-l-10 mt-4"><button type="submit" class="btn btn-info" value="5">Make a Deposit</button></div>
                                </div><!-- d-flex -->

                        </div><!-- card-body -->
                      </div><!-- card -->
                </div>
            </div>
        </form>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
