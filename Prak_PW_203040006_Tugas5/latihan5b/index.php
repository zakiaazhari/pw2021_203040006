<?php 
require 'php/functions.php';
$t_hoddie = query("SELECT * FROM t_hoddie");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040008/latihan4b/css/style.css">
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
        <div class="table-primary"></div>
            <?php foreach ($t_hoddie as $hd) :?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $hd['id'] ?>">
                        <?= $hd["nama_barang"]?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
    <button class="tombol-admin"><a href="php/admin.php">Halaman Admin</a></button>
    </div>
    </div>
</body>
</html>