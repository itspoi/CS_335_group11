@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Users</li>
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
                <h3 class="card-title">Users</h3>
                <a href="{{url('admin-user/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New User</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->mobile_number}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>
                          @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                               <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                          @endif
                        </td>
                        <td> 
                          <a href="{{url('admin-user/edit/'.encrypt($user->id)) }}" class="btn btn-sm btn-info" title="Edit User">
                            <i class="fas fa-edit"></i>
                          </a>
                          @if($user->active == 0)
                          <a href="" class="btn btn-sm btn-primary" title="Activate User" onclick="return confirm('Activate this User?')">
                            <i class="fas fa-toggle-on"></i>
                          </a>
                          <a href="{{url('admin-user/destroy/'.encrypt($user->id)) }}" class="btn btn-sm btn-danger" title="Delete User" onclick="return confirm('Delete this User?')">
                            <i class="fas fa-trash"></i>
                          </a>
                          @else
                          <a href="" class="btn btn-sm btn-danger" title="Deactivate User" onclick="return confirm('Deactivate this User?')">
                            <i class="fas fa-toggle-off"></i>
                          </a>
                          @endif
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