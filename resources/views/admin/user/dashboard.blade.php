    @extends('layouts.dashboard_app')
    @section('title')
        User | Dashboard
    @endsection
    @section('dashboard')
        active
    @endsection
    @section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item active" href="{{ route('userdashboard') }}">Home</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h1>Welcome {{ user()->name }}</h1>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection