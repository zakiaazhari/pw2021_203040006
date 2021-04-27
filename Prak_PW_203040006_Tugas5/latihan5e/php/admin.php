<?php
require 'functions.php';

$t_hoddie = query("SELECT * FROM t_hoddie");

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
                <?php $i = 1 ?>
                <?php foreach ($t_hoddie as $hd) : ?>
                    <td><?= $i; ?></td>
                    <td>
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td class="table-primary"><?= $hd["nama_barang"]; ?></td>
                    <td class="table-primary"><img src="../assets/<?= $hd['foto']; ?>"></td>
                    <td><?= $hd["deskripsi"]; ?></td>
                    <td class="table-primary"><?= $hd["warna"]; ?></td>
                    <td class="table-primary"><?= $hd["harga"]; ?></td>
                    <td id="type"><span><?= $hd["stok_barang"]; ?></span></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>