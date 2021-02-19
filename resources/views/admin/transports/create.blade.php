@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Transport</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-transport')}}">Transports</a></li>
              <li class="breadcrumb-item active">Create Transports</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-transport.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="type" class="col-sm-4 col-form-label text-md-right">Type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="type" required>

                      @error('type')
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