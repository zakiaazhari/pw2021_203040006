<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5b</title>
</head>

<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama_barang">Nama Barang :</label><br>
                <input type="text" name="nama_barang" id="nama_barang" required><br><br>
            </li>
            <li>
                <label for="foto">Foto :</label><br>
                <input type="file" name="foto" id="foto"><br><br>
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