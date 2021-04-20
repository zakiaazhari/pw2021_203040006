<?php
require 'functions.php';

$t_hoddie = query("SELECT * FROM t_hoddie");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $t_hoddie = query("SELECT * FROM t_hoddie WHERE
            nama_barang LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            warna LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            stok_barang LIKE '%$keyword%' ");
} else {
    $t_hoddie = query("SELECT * FROM t_hoddie");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoddie Champions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
    </head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>

<div class="container">
        <div class="add">
            <a href="tambah.php">Tambah Data</a>
        </div>
    </div>
    
<div class="container">
    <table cellpadding="10" cellspacing="0" border="1" class="highlight - centered brown lighten-4">
        <tr>
                <th scope="col">No</th>
                <th scope="col">Opsi</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Foto</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Warna</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok Barang</th>
            </tr>
        </thead>
        <tbody>
        <?php if (empty($t_hoddie)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Hoddie Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($t_hoddie as $hd) : ?>
            <tr>
                <td>
                <a href="ubah.php?id=<?= $bk['id'] ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $bk ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td class="table-primary"><?= $hd["nama_barang"]; ?></td>
                <td class="table-primary"><img src="../assets/<?= $hd['foto']; ?>"></td>  
                <td><?= $hd["deskripsi"]; ?></td>
                <td class="table-primary"><?= $hd["stok_barang"]; ?></td>
                <td class="table-primary"><?= $hd["warna"]; ?></td>
                 <td id="type"><span><?= $hd["harga"]; ?></span></td>
        </tr>
        <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>