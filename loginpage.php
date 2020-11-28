<?php include('server.php'); ?>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="css/table-responsive.css" media="screen" type="text/css" rel="stylesheet" />
</head>

<body data-new-gr-c-s-check-loaded="8.867.0" class="bodyzoom">
  <div class="login">
    <h1>Login to Web App</h1>
    <?php include('errors.php'); ?>
    <form method="post" action="">
      <p><input type="text" name="email" value="" placeholder="Email"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
      <p class="submit"><input type="submit" name="login" value="Login"></p>
    </form>
  </div>

  <div class="login-help">
    <p>New User? <a href="signup.php">Click here to sign up</a></p>
  </div>
</body>

</html>
