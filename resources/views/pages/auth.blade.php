<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Authentication</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login-signup.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/img-01.png') }}">
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <div class="title" id="formTitle">Login</div>
        <form id="authForm" method="POST" action="">
            @csrf
            <!-- Common Fields -->
            <div class="field" id="usernameField" style="display: none;">
                <input type="text" name="username" id="username" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="email" name="email" id="email" required>
                <label>Email Address</label>
            </div>
            <div class="field">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="field" id="confirmPasswordField" style="display: none;">
                <input type="password" id="confirmPassword">
                <label>Confirm Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Login" id="submitButton">
            </div>
            <div class="auth-link">
                <span id="toggleText">Don't have an account? </span>
                <a href="#" id="toggleForm">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>
