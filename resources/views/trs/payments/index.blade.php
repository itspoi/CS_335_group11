@extends('layouts.trs')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Payments</li>
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
                <h3 class="card-title">Payments</h3>
                <a href="{{url('admin-package/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Package</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mode</th>
                    <th>Amount</th>
                    <th>BookingID</th>
                    <th>Package</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($payments as $payment)
                      <tr>
                        <td>{{$payment->id}}</td>
                        <td>{{$payment->mode}}</td>
                        <td>{{$payment->amount}}</td>
                        <td>{{$payment->booking_id}}</td>
                        <td>{{$payment_packages[$loop->index]}}</td>
                        <td> 
                          <a href="{{url('trs-payment/receipt/'.encrypt($payment->id) )}}" class="btn btn-sm btn-primary" title="Show Receipt">
                            <i class="fas fa-file"></i>
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