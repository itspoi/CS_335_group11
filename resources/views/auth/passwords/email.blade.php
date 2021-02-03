@extends('layouts.app')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>Tourism Reservation</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Confirm Password</p>
        
      @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
          @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
          
          <!-- /.col -->
          <div class="text-right">
            <button type="submit" class="btn btn-primary btn-md">Send Password Reset Link</button>
          </div>
          <!-- /.col -->
        
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
