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
              <li class="breadcrumb-item"><a href="{{ url("trs-payment")}}">Payments</a></li>
              <li class="breadcrumb-item active">Receipt</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom to get your receipt.
            </div>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <div id="printable">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="{{ asset('images/logoIcon.png') }}" alt="TourismReservationSystem" class="brand-image img-circle elevation-3" style="opacity: .8;" height="60px" > TourismReservation
                    <small class="float-right">Date: {{date('d/m/Y')}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>TourismReservation</strong><br>
                    Block B, Third Floor<br>
                    Sayansi, Dar es Salaam<br>
                    Phone: +255 747 027 638<br>
                    Email: info@tourismReservation.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$user->name}}</strong><br>
                    Phone: {{$user->mobile_no}}<br>
                    Email: {{$user->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Receipt #{{$booking->id}}-{{$payment->id}}</b><br>
                  <br>
                  <b>Payment ID:</b> {{$payment->id}}<br>
                  <b>Payment Due:</b> {{$payment->created_at}}<br>
                  <b>Booking:</b> {{$booking->id}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Pay ID</th>
                      <th>Pay Method</th>
                      <th>BookingID</th>
                      <th>Travellers</th>
                      <th>Package</th>
                      <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$payment->id}}</td>
                        <td>{{$payment->mode}}</td>
                        <td>{{$payment->booking_id}}</td>
                        <td>{{$booking->travellers_no}}</td>
                        <td>{{$package->title}}</td>
                        <td>{{$payment->amount}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button class="btn btn-default print"><i class="fas fa-print"></i> Print</button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection