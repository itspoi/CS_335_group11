@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-booking')}}">Bookings</a></li>
              <li class="breadcrumb-item active">Create Booking</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-booking.store') }}">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label text-md-right">User</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name" required>

                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="package" class="col-sm-4 col-form-label text-md-right">Package</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('package') is-invalid @enderror" name="package" id="package" placeholder="Package" required>

                      @error('package')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-sm-4 col-form-label text-md-right">Status</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status" placeholder="Status" required>

                      @error('status')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
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