@extends('layouts.trs')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <div class="card-body">
                @include('flash-message')
                
                <div class="col-md-6 mx-auto">
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      
                      <div class="text-center">
                        <i class="fas fa-user profile-user-img img-fluid fa-5x"></i>
                      </div>

                      <h3 class="profile-username text-center">{{$user->name}}</h3>

                      <p class="text-muted text-center">
                        @if(!empty($user->getRoleNames()))
                          @foreach($user->getRoleNames() as $v)
                             {{ $v }} @if(!$loop->last)|@endif
                          @endforeach
                        @endif
                      </p>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Phone Number</b> <a class="float-right">{{ $user->mobile_number }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Email Address</b> <a class="float-right">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Address</b> <a class="float-right">{{ $user->address }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Bookings</b> <a class="float-right">{{ $bookings_count }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Payments</b> <a class="float-right">{{ $payments_count }}</a>
                        </li>
                      </ul>

                      <a href="{{ url('trs-profile/changePassword')}}" class="btn btn-warning float-left"><b>Change Password</b></a>

                      <a href="{{ url('trs-profile/editUserprofile/'.Auth::user()->id)}}" class="btn btn-primary float-right"><b>Edit</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->

                <a href="{{url('trs-profile/destroy'.Auth::user()->id)}}"><button type="button" class="btn btn-sm btn-outline-danger float-right">Delete Account</button></a>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->    
@endsection