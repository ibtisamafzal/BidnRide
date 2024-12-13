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
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/login-signup.css') }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>
@endpush

{{-- Explanation of Changes
Extend layout.blade.php:

The file now uses @extends('layout') to include the header and footer automatically.
Dynamic Title:

@section('title', 'Login Form') sets the page title dynamically.
CSRF Token:

Added @csrf for Laravel form security.
Dynamic Links:

Updated the signup link to use the route helper:
blade
Copy code
<a href="{{ route('pages.signup') }}">Signup now</a>
Separation of Styles and Scripts:

Added @push('styles') and @push('scripts') for better organization.
 --}}

{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="/assets/css/login-signup.css">
      <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico"/>
   </head>

<body>
      <div class="wrapper">
         <div class="title">Login Form</div>
         <form action="#">
            <div class="field">
               <input type="text" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
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
               <a href="signup.html">Signup now</a>
            </div>
         </form>
      </div>

      <script src="/assets/js/main.js"></script>
</body>
</html> --}}
