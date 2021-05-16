<?php
require 'functions.php';
// ambil id dari URL
$id = $_GET['id'];
// queri mahasiswa berdasarkan id
$t_hoddie = query("SELECT *FROM t_hoddie WHERE no = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Hoddie</title>
</head>

<body>
  <h3>Detail Hoddie</h3>
  <ul>
    <li><img width="200px" src="img/<?= $t_hoddie['foto']; ?>"></li>
    <li>Nama Barang : <?= $t_hoddie['nama_barang']; ?></li>
    <li>Deskripsi : <?= $t_hoddie['deskripsi']; ?></li>
    <li>Warna : <?= $t_hoddie['warna']; ?></li>
    <li>Harga : <?= $t_hoddie['harga']; ?></li>
    <li><a href="ubah.php?id=<?= $t_hoddie['no']; ?>">ubah</a> | <a href="hapus.php?id=<?= $t_hoddie['no']; ?>" onclick="return confirm('apakah anda yakin?')">hapus</a></li> | <a href="index.php?id=<?= $t_hoddie['no']; ?>" onclick="return confirm('apakah anda yakin?')">Beli</a></li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>