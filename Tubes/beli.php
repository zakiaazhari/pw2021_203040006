<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil no dari url
$id = $_GET['id'];



// Query mahasiswa berdasarkan no
$t_hoddie = query("SELECT * FROM mahasiswa WHERE no = $id");

// cek apakah tombol ubah sudah di tekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah');
            document.location.href = 'index.php'
          </script>";
  } else {
    echo "Data Gagal diubah";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
</head>

<body>

  <h3>Checkout</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama Barang :
          <input type="text" name="nama_barang" autofocus required>
        </label>
      </li>

      <li>
        <label>
          Alamat :
          <input type="text" name="deskripsi" required>
        </label>
      </li>

      <li>
        <label>
          Warna :
          <input type="text" name="warna" required>
        </label>
      </li>

      <li>
        <label>
          Ukuran :
          <input type="text" name="harga" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Beli</button>
      </li>
      <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
  </form>

</body>

</html>