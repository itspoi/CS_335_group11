@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transports</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Transports</li>
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
                <h3 class="card-title">Transports</h3>
                <a href="{{url('admin-transport/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Transport</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Type</th>
                    <th>Charges</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($transports as $transport)
                      <tr>
                        <td>{{$transport->picture}}</td>
                        <td>{{$transport->type}}</td>
                        <td>{{$transport->charges}}</td>
                        <td> 
                          <a href="{{url('admin-transport/edit/'.encrypt($transport->id)) }}" class="btn btn-sm btn-info" title="Edit Transport">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{url('admin-transport/destroy/'.encrypt($transport->id)) }}" class="btn btn-sm btn-danger" title="Delete Transport" onclick="return confirm('Delete this Transport?')">
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