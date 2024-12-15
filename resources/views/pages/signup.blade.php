@extends('layout')

@section('title', 'Signup Form')

@section('content')
<div class="wrapper">
    <div class="title">Signup Form</div>
    {{-- <form id="signupForm" method="POST" action="{{ route('signup') }}">
        @csrf
        <div class="field">
            <input type="text" name="username" required>
            <label>Username</label>
        </div>
        <div class="field">
            <input type="email" name="email" required>
            <label>Email Address</label>
        </div>
        <div class="field">
            <input type="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="field">
            <input type="password" name="password_confirmation" required>
            <label>Confirm Password</label>
        </div>
        <div class="field">
            <input type="submit" value="Signup">
        </div>
    </form> --}}
    <form id="signupForm" method="POST" action="{{ route('signup.submit') }}">
        @csrf
        <div class="field">
            <input type="text" id="username" name="username" required>
            <label>Username</label>
        </div>
        <div class="field">
            <input type="email" id="email" name="email" required>
            <label>Email Address</label>
        </div>
        <div class="field">
            <input type="password" id="password" name="password" required>
            <label>Password</label>
        </div>
        <div class="field">
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <label>Confirm Password</label>
        </div>
        <div class="field">
            <input type="submit" value="Signup">
        </div>
        <div class="signup-link">Already a member?
            <a href="{{ route('pages.login') }}">Login now</a>
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
Explanation of Changes
Extend layout.blade.php:

The file now uses @extends('layout') to include the header and footer.
Dynamic Title:

@section('title', 'Signup Form') sets the page title dynamically.
CSRF Token:

Added @csrf for Laravel form security.
Dynamic Links:

Updated the login link to use the route helper:
blade
Copy code
<a href="{{ route('pages.login') }}">Login now</a>
Separation of Styles and Scripts:

Added @push('styles') for login-signup.css.
Added @push('scripts') for main.js.


--}}

{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Signup Form</title>
   <link rel="stylesheet" href="/assets/css/login-signup.css">
   <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico"/>
</head>

<body>
      <div class="wrapper">
         <div class="title">Signup Form</div>
         <form id="signupForm" action="#">
            <div class="field">
               <input type="text" id="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="email" id="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" id="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="password" id="confirmPassword" required>
               <label>Confirm Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Signup">
            </div>
            <div class="signup-link">Already a member?
               <a href="login.html">Login now</a>
            </div>
         </form>
      </div>

      <script src="/assets/js/main.js"></script>
</body>
</html> --}}
