<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
    <style>
    section {
        min-height: 420px;
    }

    h1 {
        text-align: center;
    }

    span {
        font-family: arial;
        border: 1px solid black;
        padding: 5px;
        background-color: blue;
        font-weight: bold;
    }
    </style>

    <title>Hoddie Champions</title>
</head>
<body>
    <div class="container">

        <h3>Form Tambah Data Buku</h3>

        <form action="" method="POST">
            <ul>
                <li>
                    <label for="nama_barang">Nama Banang :</label><br>
                    <input type="text" name="nama_barang" id="Nama_barang" required><br><br>
                </li>
                <li>
                    <label for="foto">Foto :</label><br>
                    <input type="file" name="foto" id="foto" ><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="text" name="deskripsi" id="nama" required><br><br>
                </li>
                <li>
                    <label for="warna">Warna :</label><br>
                    <input type="text" name="warna" id="warna" required><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="nama" required><br><br>
                </li>
                <li>
                    <label for="stok_barang">Stok Barang :</label><br>
                    <input type="text" name="stok_barang" id="nama" required><br><br>
                </li>
                <br>
                <button type="submit" name="tambah">Tambah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>

</body>
</html>