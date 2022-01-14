@extends('layouts.main-login',['title'=>'login'])
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>{{ config('app.name')}}</b>Petugas</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form action="{{ route('petugas.login')}}" method="post">
          <div class="input-group mb-3">
            <input name="username"type="Username" class="form-control {{ $errors->has('username') ? 'is-invalid':''}}" 
            placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('username')
                <div class="invalid-feedback">
                  {{ $message}}
                </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input name="password"type="password" class="form-control {{ $errors->has('password') ? 'is-invalid':''}}" 
             placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
        @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      {{-- login-card-box --}}
    </div>
</div>
@endsection