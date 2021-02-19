@extends('layouts.trs')

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
              <li class="breadcrumb-item"><a href="{{ url('trs-booking')}}">Bookings</a></li>
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
              <form class="form-horizontal" method="POST" action="{{ route('trs-booking.store') }}">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="packageid" class="col-sm-4 col-form-label text-md-right">Package</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control @error('packageid') is-invalid @enderror" name="packageid" placeholder="{{$package->title}}" required readonly>
                    <input type="text" class="form-control @error('packageid') is-invalid @enderror" name="packageid" id="packageid" value="{{$package->id}}" required hidden>
                    
                      @error('packageid')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="travellers_no" class="col-sm-4 col-form-label text-md-right">No of Travellers</label>
                    <div class="col-sm-6">
                      <input type="number" min="0" value="1" class="form-control @error('name') is-invalid @enderror dynamic" name="travellers_no" id="travellers_no" required>

                      @error('travellers_no')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="from_at" class="col-sm-4 col-form-label text-md-right">From Date</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control @error('from_at') is-invalid @enderror" name="from_at" id="from_at" placeholder="From Date" required>

                      @error('from_at')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="to_at" class="col-sm-4 col-form-label text-md-right">To Date</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control @error('to_at') is-invalid @enderror" name="to_at" id="to_at" placeholder="To Date" required>

                      @error('to_at')
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