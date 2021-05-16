<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit();
}

// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die();
    }
    header("Location: ../index.php");
    die();
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- my css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- my icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body class="con-login">
  <div class="container">
    <div class="shadow p-5 mb-5 bg-white rounded" id="bg-login">
      <form action="" method="post">
        <?php if (isset($error)) { ?>
          <p>Username atau password salah</p>
        <?php } ?>
        <h1 class="text-center mb-3">Penjualan Hoddie</h1>

        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control mb-3">

        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control mb-3">

        <div class="btn-group" role="group">
          <label class="form-label" for="btncheck1">Remember me</label>
          <input type="checkbox" class="btn-check mt-1 ml-2" id="btncheck1" autocomplete="off">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-info btn-block">Login</button>
      </form>
    </div>
  </div>
</body>

</html>