@extends('layouts.registers')

@section('content')

<div class="register-container">
    <h2>Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Full Name</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
               placeholder="Enter your name">

        <label>Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autocomplete="email"
               placeholder="example@domain.com">

        <label>Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password"
               placeholder="Enter password">

        <label>Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required autocomplete="new-password"
               placeholder="Confirm password">

        <!-- <div class="checkbox">
            <a href="{{ route('login') }}">Already registerd? Login Here</a>
        </div> -->

        <!-- ✅ YOUR BUTTONS (CORRECT PLACE) -->
        <div class="action_btns mt-3">
            <a href="{{ route('welcome') }}" class="abtn back_btn">
                Back
            </a>

            <button type="submit" class="abtn">
                Register
            </button>
        </div>

    </form>
</div>

@endsection