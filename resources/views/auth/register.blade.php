@extends('layout')

@section('title', 'Signup Form')

@section('content')
<div class="wrapper">
    <div class="title">Signup Form</div>
        
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="field">
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        <label>Full Name</label>
        @error('name')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="field">
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        <label>Email Address</label>
        @error('email')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="field">
        <input type="password" id="password" name="password" required>
        <label>Password</label>
        @error('password')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="field">
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <label>Confirm Password</label>
    </div>
    <div class="field">
        <input type="submit" value="Signup">
    </div>
    <div class="signup-link">Already a member?
        <a href="{{ route('login') }}">Login now</a>
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
