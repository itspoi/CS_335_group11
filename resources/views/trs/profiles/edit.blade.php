@extends('layouts.trs')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url("trs-profile")}}">Profile</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
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
                
                <form method="POST" action="{{ route('trs-profile.updateUserprofile', $user->id) }}">
                  @csrf

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row">
                      <label for="mobile_number" class="col-md-4 col-form-label text-md-right">Mobile Number</label>

                      <div class="col-md-6">
                          <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ $user->mobile_number }}" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                      <div class="col-md-6">
                          <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" required>
                      </div>
                  </div><!-- /.form-group -->

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success float-right" onclick="return confirm('Are you sure you want to edit this?')">
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