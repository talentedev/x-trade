@extends('layouts.dashboard_app')
@section('title')
    Social | Dashboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Social</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Social</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_social'))
                    <div class="alert alert-danger">{{ session('delete_social') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Social Icon</th>
                                <th>Social Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socials as $social)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $social->social_icon }}</td>
                                <td>{{ $social->social_link }}</td>
                                <td>
                                    <a href="{{ route('social.show', $social->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('social.destroy', $social->id) }}" method="post">
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
                    @if (session('add_social'))
                    <div class="alert alert-success">{{ session('add_social') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add social</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('social.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Social Icon</label>
                          <input type="text" class="form-control" name="social_icon" placeholder="Enter social icon class">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Social Link</label>
                          <textarea name="social_link" rows="4" class="form-control" placeholder="Enter social link"></textarea>
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