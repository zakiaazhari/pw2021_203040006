<?php

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];
$t_hoodie = query("SELECT * FROM t_hoodie WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoddie</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body background-color="lavender">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/<?= $t_hoddie["foto"]; ?>" ; alt="">
        </div>
        <div class="keterangan">
            <p><?= $t_hoddie["nama_barang"]; ?></p>
            <p><?= $t_hoddie["deksripsi"]; ?></p>
            <p><?= $t_hoddie["warna"]; ?></p>
            <p><?= $t_hoddie["harga"]; ?></p>
            <p><?= $t_hoddie["stok_barang"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>

</body>

</html>