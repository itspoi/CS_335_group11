@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Tour Place</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-place')}}">Tour Places</a></li>
              <li class="breadcrumb-item active">Create Tour Places</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-place.store') }}">
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
                    <label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">Address</label>
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
                    <label for="charges" class="col-sm-4 col-form-label text-md-right">Charges</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('type') is-invalid @enderror" name="charges" id="charges" placeholder="charges" required>

                      @error('charges')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="picture" class="col-sm-4 col-form-label text-md-right">picture</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control @error('type') is-invalid @enderror" name="picture" id="picture" placeholder="picture" required>

                      @error('picture')
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