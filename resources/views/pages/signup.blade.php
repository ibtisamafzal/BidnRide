@extends('layout')

@section('title', 'Signup Form')

@section('content')
<div class="wrapper">
    <div class="title">Signup Form</div>
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
