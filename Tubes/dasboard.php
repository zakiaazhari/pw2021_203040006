<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
// $t_hoddie = query("SELECT * FROM t_hoddie");
$t_hoddie = query('SELECT * FROM t_hoddie');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login-box">
    <h1>Login</h1>
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Username">
    </div>
    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password">
    </div>
    <input type="button" class="btn" value="Sign in">
  </div>
</body>

</html>