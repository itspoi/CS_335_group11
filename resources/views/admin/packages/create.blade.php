@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-package')}}">Packages</a></li>
              <li class="breadcrumb-item active">Create Package</li>
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
              <form class="form-horizontal" method="POST" action="{{ route('admin-package.store') }}">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label text-md-right">Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Title" required>

                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label text-md-right">Description</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description" required>

                      @error('description')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-sm-4 col-form-label text-md-right">Type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Type" required>

                      @error('type')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="amount" class="col-sm-4 col-form-label text-md-right">Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount" placeholder="Amount" required>

                      @error('amount')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="hotelid" class="col-sm-4 col-form-label text-md-right">Hotel</label>
                    <div class="col-sm-6">
                      <select style="width: 100%;" name="hotelid" id="hotelid" required>
                        <option selected>Select Hotel</option>
                        @foreach($hotels as $hotel)
                        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                        @endforeach
                    </select>

                      @error('hotelid')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="transportid" class="col-sm-4 col-form-label text-md-right">Transport</label>
                    <div class="col-sm-6">
                      <select style="width: 100%;" name="transportid" id="transportid" required>
                        <option selected>Select Transport</option>
                        @foreach($transports as $transport)
                        <option value="{{$transport->id}}">{{$transport->type}}</option>
                        @endforeach
                    </select>

                      @error('transportid')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="placeid" class="col-sm-4 col-form-label text-md-right">Place</label>
                    <div class="col-sm-6">
                      <select style="width: 100%;" name="placeid" id="placeid" required>
                          <option selected>Select Place</option>
                          @foreach($places as $place)
                          <option value="{{$place->id}}">{{$place->name}}</option>
                          @endforeach
                      </select>

                      @error('placeid')
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