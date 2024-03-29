@extends('backend/layouts.login')
@section('content')
<form class="login-form" method="POST" action="{{ route('login') }}">
  @csrf
  <div class="login-wrap">
    <p class="login-img"><i class="icon_lock_alt"></i></p>
    <div class="input-group">
      <span class="input-group-addon"><i class="icon_profile"></i></span>
      <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
       name="email" value="{{old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
       @error('email')
       <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
  </div>
  <div class="input-group">
      <span class="input-group-addon"><i class="icon_key_alt"></i></span>
      <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
        name="password" required autocomplete="current-password" placeholder="Password">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
  </div>
  <label class="checkbox">
    <input type="checkbox" value="remember-me" name="remember" id="remember"> Remember me
    <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
</label>
<button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
</div>
</form>
<div class="text-right">
  <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>
@endsection
