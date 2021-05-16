<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$t_hoddie = query("SELECT * FROM t_hoddie WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040006/latihan4b/css/style.css">
    <style>
        .table {
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        img {
            max-width: 150px;
        }
    </style>

    <title>Hoddie Champions</title>
</head>

<body>


    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $t_hoddie["foto"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p class="table-primary"><?= $t_hoddie["nama_barang"]; ?></p>
            <p class="table-primary"><?= $t_hoddie["deskripsi"]; ?></p>
            <p class="table-primary"><?= $t_hoddie["warna"]; ?></p>
            <p class="table-primary"><?= $t_hoddie["harga"]; ?></p>
            <p class="table-primary"><?= $t_hoddie["stok_barang"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>