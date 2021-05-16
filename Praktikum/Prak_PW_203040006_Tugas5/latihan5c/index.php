<?php
require 'php/functions.php';
$t_hoddie = query("SELECT * FROM t_hoddie")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5c</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <button><a href="php/admin.php">Edit</a></button>
    <table class="table" border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Stok Barang</th>
            <th>#</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($t_hoddie as $hd) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="assets/<?= $hd["foto"]; ?>"></td>
                <td><?= $hd["nama_barang"]; ?></td>
                <td><?= $hd["deskripsi"]; ?></td>
                <td><?= $hd["warna"]; ?></td>
                <td><?= $hd["harga"]; ?></td>
                <td><?= $hd["stok_barang"]; ?></td>
                <td>
                    <a href="php/detail.php?id=<?= $hd['id'] ?>" style="text-decoration: none;">Lihat</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>