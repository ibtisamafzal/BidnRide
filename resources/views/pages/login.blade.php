@extends('layout')

@section('title', 'Login Form')

@section('content')
<div class="wrapper">
   <div class="title">Login Form</div>
      <form action="#" method="POST">
         @csrf
         <div class="field">
            <input type="email" name="email" required>
            <label>Email Address</label>
         </div>
         <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
         </div>
         <div class="content">
            <div class="checkbox">
               <input type="checkbox" id="remember-me" name="remember">
               <label for="remember-me">Remember me</label>
            </div>
            <div class="pass-link">
               <a href="#">Forgot password?</a>
            </div>
         </div>
         <div class="field">
            <input type="submit" value="Login" id="login-button">
         </div>
         <div class="signup-link">Not a member?
            <a href="{{ route('pages.signup') }}">Signup now</a>
         </div>
      </form>
</div>
@stack('styles')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/login-signup.css') }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>
@endpush
