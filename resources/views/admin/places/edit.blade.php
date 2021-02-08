@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Tour Place</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-place')}}">Tour Places</a></li>
              <li class="breadcrumb-item active">Edit Tour Place</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-place.update',$place->id)}}">
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
                    <label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>
                    <div class="col-sm-8">
                      <input type="description" class="form-control" name="description" id="description" value="{{ $hotel->description }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">Address</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="address" id="address" value="{{$hotel->address}}" required>
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
                      <input type="file" class="form-control" name="picture" id="picture" value="{{$hotel->picture}}" required>
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