<?php
require 'functions.php';

// cek apakah tombol sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan');
            document.location.href = 'index.php'
          </script>";
  } else {
    echo "Data Gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Hoddie</title>
</head>

<body>

  <h3>Tambah Data Hoddie</h3>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $t_hoddie['id']; ?>">
    <form>
      <div class="card-panel">
        <h5>Please Fill Out This Form</h5>
        <div class="input-field">
          <input type="text" name="nama_barang" id="nama_barang" required class="validate">
          <label for="nama_barang">Nama Barang</label>
        </div>
        <div class="input-field">
          <input type="deskripsi" name="deskripsi" id="deskripsi" class="validate">
          <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="input-field">
          <input type="text" name="warna" id="warna">
          <label for="warna">Warna</label>
        </div>
        <div class="input-field">
          <textarea name="harga" id="harga" class="materialize-textarea"></textarea>
          <label for="harga">Harga</label>
        </div>
        <button type="submit" class="btn blue darken-4">submit</button>
      </div>
    </form>