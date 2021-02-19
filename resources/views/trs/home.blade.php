@extends('layouts.trs')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-wallet" style="color: white;"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bookings</span>
                <span class="info-box-number">{{ $bookings_count }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-credit-card"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payments</span>
                <span class="info-box-number">{{ $payments_count }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          
          <!-- Right col -->
          <section class="col-lg-12 connectedSortable">

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Recent Bookings</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Package</th>
                      <th>Travellers</th>
                      <th>Amount</th>
                      <th>status</th>
                      <th>From Date</th>
                      <th>To Date</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($bookings as $booking)
                        <tr>
                          <td>{{$booking->id}}</td>
                          <td>{{$booking_packages[$loop->index]}}</td>
                          <td>{{$booking->travellers_no}}</td>
                          <td>{{$booking->amount}}</td>
                          <td>{{$booking->status}}</td>
                          <td>{{$booking->from_at}}</td>
                          <td>{{$booking->to_at}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="" class="btn btn-sm btn-info float-left">Create Booking</a>
                <a href="" class="btn btn-sm btn-secondary float-right">View Bookings</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Right col -->
          
        </div>
        <!-- /.row (main row) -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection