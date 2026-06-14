@extends('layouts.logins')

@section('content')

<!-- my login -->
  <div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <label>Email / Username</label>
       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      <!-- <input type="text" placeholder="Enter your email or username" /> -->

      <label>Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      <!-- <input type="password" placeholder="Enter your password" /> -->

      <div class="checkbox">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <!-- <input id="remember" type="checkbox" /> -->
        <label for="remember">Remember me on this computer</label>
      </div>

      <div class="action_btns">
        <button type="submit" class="btn btn-primary">
        {{ __('Login') }}
        </button>
        <!-- <a href="index.html" class="abtn"><i class="fa fa-angle-double-left"></i> Back</a>
        <a href="#" class="abtn">Login</a> -->
      </div>
    </form>

    <a href="#" class="forgot_password">Forgot password?</a>
    <a href="{{ route('register') }}">i don't have an account sign-up here </a>
  </div>



@endsection
