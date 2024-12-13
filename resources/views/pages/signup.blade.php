<!DOCTYPE html>
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
</html>
