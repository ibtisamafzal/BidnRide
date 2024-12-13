<!DOCTYPE html>
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
</html>