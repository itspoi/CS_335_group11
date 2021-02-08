@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hotels</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Hotels</li>
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
                <h3 class="card-title">Hotels</h3>
                <a href="{{url('admin-hotel/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Hotel</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Charges</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($hotels as $hotel)
                      <tr>
                        <td>{{$user->picture}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->mobile_number}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->charges}}</td>
                        <td> 
                          <a href="{{url('admin-hotel/edit/'.encrypt($hotel->id)) }}" class="btn btn-sm btn-info" title="Edit Hotel">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{url('admin-hotel/destroy/'.encrypt($hotel->id)) }}" class="btn btn-sm btn-danger" title="Delete Hotel" onclick="return confirm('Delete this Hotel?')">
                            <i class="fas fa-trash"></i>
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