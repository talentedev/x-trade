    @extends('layouts.dashboard_app')
    @section('title')
        Home | Dashboard
    @endsection
    @section('dashboard')
        active
    @endsection
    @section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item active" href="{{ url('/home') }}">Home</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h1>Admin Dashboard</h1>
        </div><!-- sl-page-title -->
        
        @if (user()->role == 1)
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-bordered">
                <thead class="thead-bordered">
                  <tr>
                    <th>No</th>
                    <th>User name</th>
                    <th>User email</th>
                    <th>User Role</th>
                    <th>User Thumbnail</th>
                    <th>User Creat Time</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $users->firstItem() +$loop->index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @if ($user->role == 1)
                          Admin
                      @endif
                      @if ($user->role == 2)
                          User
                      @endif
                    </td>
                    <td>
                      <img style="height: 50px; width: 50px;" src="{{ asset('uploads/profile_photos') }}/{{ $user->profile_photo }}" alt="">
                    </td>
                    <td>
                        <li>Date: {{ $user->created_at->format('d-m-y') }}</li>
                        <li>Time: {{ $user->created_at->format('h:i:s A') }}</li>
                        <li>Time: {{ $user->created_at->diffForHumans() }}</li>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $users->links() }}
            </div>
          </div>
        </div>
        @endif

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection