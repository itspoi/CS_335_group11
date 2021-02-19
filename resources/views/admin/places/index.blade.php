@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tour Places</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Tour Places</li>
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
                <h3 class="card-title">Tour Places</h3>
                <a href="{{url('admin-place/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Tour Place</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="places" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Charges</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($places as $place)
                      <tr>
                        <td><img src="{{ asset('storage/pictures/'.$place->picture) }}" alt="{{$place->name}}" height="60" width="120"></td>
                        <td>{{$place->name}}</td>
                        <td>{{$place->description}}</td>
                        <td>{{$place->address}}</td>
                        <td>{{$place->charges}}</td>
                        <td> 
                          <a href="{{url('admin-place/edit/'.encrypt($place->id)) }}" class="btn btn-sm btn-info" title="Edit Place">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{url('admin-place/destroy/'.encrypt($place->id)) }}" class="btn btn-sm btn-danger" title="Delete Place" onclick="return confirm('Delete this Place?')">
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