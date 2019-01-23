@extends('layouts.app')
@section("head")
  <title>Pulsar | Register</title>
@endsection
@section('loginContent')
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Pulsar</b> REGISTER</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="form-group has-feedback">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group has-feedback">
            <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="{{ route('login') }}" class="text-center">I already have membership</a>
          {{--<button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>--}}
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>  
          </div>
        <!-- /.col -->
      </div>
    </form>

    {{--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>--}}
    <!-- /.social-auth-links -->
    <hr>
    {{--<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>--}}
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


@endsection
