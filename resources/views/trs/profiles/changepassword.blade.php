@extends('layouts.trs')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url("trs-profile")}}">Profile</a></li>
              <li class="breadcrumb-item active">Change Password</li>
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
                
                <form method="POST" action="{{ route('trs-profile.storePassword') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="current_password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                      <div class="col-md-6">
                          <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row">
                      <label for="new_password" class="col-md-4 col-form-label text-md-right">New Password</label>

                      <div class="col-md-6">
                          <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row">
                      <label for="new_confirm_password" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>

                      <div class="col-md-6">
                          <input type="password" class="form-control" id="new_confirm_password" name="new_confirm_password" placeholder="Confirm New Password" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success float-right" onclick="return confirm('Are you sure you want to change password?')">
                            Update
                        </button>
                      </div>
                  </div><!-- /.form-group -->
              </form><!-- /.form -->
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