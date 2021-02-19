@extends('layouts.trs')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Packages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Packages</li>
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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Package</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  @include('flash-message')
                  
                  <div class="jumbotron" style="background-color: transparent !important; padding-top: 0;">
                    <h1 class="display-4">{{$package->title}}</h1>
  
                    <dl class="row">
                      <dt class="col-sm-3 text-primary">Package Type</dt>
                      <dd class="col-sm-9 lead">{{$package->type}}</dd>
                    
                      <dt class="col-sm-3 text-primary">Package Description</dt>
                      <dd class="col-sm-9 lead">{{$package->description}}</dd>
                    
                      <dt class="col-sm-3 text-primary">Tour Place Description</dt>
                      <dd class="col-sm-9 lead">{{$place->description}}</dd>
  
                    </dl>
                    
                    <hr class="my-4">
                    <div class="row">
                      <div class="card-deck">
                        <div class="card">
                          <img class="card-img-top rounded" src="{{ asset('storage/pictures/'.$place->picture)}}" alt="{{$place->name}}" height="200">
                          <div class="card-body">
                            <h5 class="display-5 pb-2 text-center font-weight-bold">Place</h5>
                            <dl class="row">
                              <dt class="col-sm-4 text-primary">Name:</dt>
                              <dd class="col-sm-8">{{$place->name}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Address:</dt>
                              <dd class="col-sm-8">{{$place->address}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Charges:</dt>
                              <dd class="col-sm-8">{{$place->charges}}</dd>
  
                            </dl>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top rounded" src="{{ asset('storage/pictures/'.$hotel->picture)}}" alt="{{$hotel->name}}" height="200">
                          <div class="card-body">
                            <h5 class="display-5 pb-2 text-center font-weight-bold">Hotel</h5>
                            <dl class="row">
                              <dt class="col-sm-4 text-primary">Name:</dt>
                              <dd class="col-sm-8">{{$hotel->name}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Type:</dt>
                              <dd class="col-sm-8">{{$hotel->type}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Address:</dt>
                              <dd class="col-sm-8">{{$hotel->address}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Charges:</dt>
                              <dd class="col-sm-8">{{$hotel->charges}}</dd>
                            </dl>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top rounded" src="{{ asset('storage/pictures/'.$transport->picture)}}" alt="{{$transport->type}}" height="200">
                          <div class="card-body">
                            <h5 class="display-5 pb-2 text-center font-weight-bold">Transport</h5>
                            <dl class="row">
                              <dt class="col-sm-4 text-primary">Type:</dt>
                              <dd class="col-sm-8">{{$transport->type}}</dd>
                            
                              <dt class="col-sm-4 text-primary">Charges:</dt>
                              <dd class="col-sm-8">{{$transport->charges}}</dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row pt-3">
                      <p class="lead text-left col-sm-6">
                        <a class="btn btn-primary btn-lg" href="{{url('trs-booking/create/'..encrypt($package->id))}}" role="button">Book</a>
                      </p>
    
                      <p class="lead text-right text-success font-weight-bold col-sm-6" style="font-size: 45px"><span class="text-primary">Total: </span>{{$package->amount}} Tsh</p>
                    </div>

                  </div>
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