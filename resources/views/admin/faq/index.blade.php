@extends('layouts.dashboard_app')
@section('title')
    Faq | Dashboard
@endsection
@section('faq')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Faq</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Faq</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    @if (session('delete_faq'))
                    <div class="alert alert-danger">{{ session('delete_faq') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Faq question</th>
                                <th>Faq answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $faq->answer }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>
                                    <a href="{{ route('faq.show', $faq->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('faq.destroy', $faq->id) }}" method="post">
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
                    @if (session('add_faq'))
                    <div class="alert alert-success">{{ session('add_faq') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add faq</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('faq.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Faq Question</label>
                          <input type="text" class="form-control" name="question" placeholder="Enter faq question">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Faq Answer</label>
                          <textarea name="answer" rows="4" class="form-control" placeholder="Enter faq answer"></textarea>
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