<?php include('server.php'); ?>
<html>

<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="css/table-responsive.css" media="screen" type="text/css" rel="stylesheet" />
</head>

<body data-new-gr-c-s-check-loaded="8.867.0">
  <div class="login">
  <?php include('errors.php'); ?>
    <h1>Register User</h1>
    <form method="post" action="signup.php">
      <p><input type="text" name="username" value="" placeholder="Name"></p>
      <p><input type="text" name="email" value="" placeholder="Email"></p>
      <p><input type="text" name="college" value="" placeholder="College/School"></p>
      <p><input type="text" name="rnumber" value="" placeholder="Roll Number"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>

      <p class="submit"><input type="submit" name="signup" value="Sign up"></p>
    </form>
    <div class="login-help">
      <p>Already a User? <a href="loginpage.php">Click here to login</a></p>
    </div>
  </div>
</body>

</html>