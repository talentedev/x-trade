@extends('layouts.dashboard_app')
@section('title')
    Update | faq | Dashboard
@endsection
@section('faq')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('faq.index') }}">Faq</a>
        <a class="breadcrumb-item active">Update Faq</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Faq</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_faq'))
                    <div class="alert alert-success">{{ session('update_faq') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update faq</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('faq.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Faq Question</label>
                          <input type="text" class="form-control" name="question" value="{{ $info->question }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Faq Answer</label>
                          <textarea name="answer" rows="4" class="form-control" > {{ $info->answer }}</textarea>
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