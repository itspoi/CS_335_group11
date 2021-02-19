@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-hotel')}}">Hotels</a></li>
              <li class="breadcrumb-item active">Edit Hotel</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-hotel.update',$hotel->id)}}">
                @csrf

                <div class="card-body">
                  @include('flash-message')
                  
                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="name" id="name" value="{{$hotel->name}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="mobile_number" class="col-sm-4 col-form-label text-md-right">Mobile Number</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="{{ $hotel->mobile_number }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" id="email" value="{{ $hotel->email }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">Address</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" value="{{$hotel->address}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-sm-4 col-form-label text-md-right">type</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="type" id="type" value="{{$hotel->type}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="charges" class="col-sm-4 col-form-label text-md-right">charges</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="charges" id="charges" value="{{$hotel->charges}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="picture" class="col-sm-4 col-form-label text-md-right">picture</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="picture" id="picture" value="{{$hotel->picture}}">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Update</button>
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