@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-user')}}">Users</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('admin-user.store') }}">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Full Name" required>

                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobile_number'" class="col-sm-4 col-form-label text-md-right">Last Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" id="mobile_number" placeholder="Mobile Number" required>

                      @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">Phone No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address" required>

                      @error('address')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label text-md-right">Password</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>

                      <span>At least 8 characters</span>

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password-confirm" class="col-sm-4 col-form-label text-md-right">Confirm Password</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
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