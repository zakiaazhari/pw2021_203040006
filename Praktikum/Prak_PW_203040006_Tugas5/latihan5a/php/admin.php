<?php
require 'functions.php';
$t_hoddie = query("SELECT * FROM t_hoddie")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Stok Barang</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($t_hoddie as $hd) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/<?= $hd['foto']; ?>" alt=""></td>
                <td><?= $hd['nama_barang']; ?></td>
                <td><?= $hd['deskripsi']; ?></td>
                <td><?= $hd['warna']; ?></td>
                <td><?= $hd['harga']; ?></td>
                <td><?= $hd['stok_barang']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>