<?php
// mengecek apakah ada id yg dikirimkan
// jika tidak maka anda akan dikembalikan kehalaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $t_hoddie = query("SELECT * FROM t_hoddie WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoddie Champions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
    
    <div class="container">
       <div class="gambar">
            <img src="../assets/img/<?= $t_hoddie["foto"]; ?>" alt="">
       </div>
       <div class="keterangan">
           <p><?= $t_hoddie["nama_barang"]; ?></p>
           <p><?= $t_hoddie["deskripsi"]; ?></p>
           <p><?= $t_hoddie["warna"]; ?></p>
           <p><?= $t_hoddie["harga"]; ?></p>
           <p><?= $t_hoddie["stok_barang"]; ?></p>
           <p><button><?= $t_hoddie["nama_barang"]; ?></button></p>
       </div>

       <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>