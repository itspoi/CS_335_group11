@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bookings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Bookings</li>
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
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bookings</h3>
                <a href="{{url('admin-booking/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Booking</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Package</th>
                    <th>Travellers</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($bookings as $booking)
                      <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking_users[$loop->index]}}</td>
                        <td>{{$booking_packages[$loop->index]}}</td>
                        <td>{{$booking->travellers_no}}</td>
                        <td>{{$booking->amount}}</td>
                        <td>{{$booking->from_at}}</td>
                        <td>{{$booking->to_at}}</td>
                        <td>{{$booking->status}}</td>
                        <td> 
                          <a href="{{url('admin-booking/payment/'.encrypt($booking->id)) }}" class="btn btn-sm btn-info" title="Pay Booking">
                            <i class="fas fa-credit-card"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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