<?php 
// menghubungkan dengan file lainnya
require 'php/functions.php';

// melakukan query
$t_hoddie = query("SELECT * FROM t_hoddie");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoddie Champions</title>
</head>    
<body>

<div class="container">
         <?php foreach ($t_hoddie as $hd) : ?>
              <p class="nama">
                    <a href="php/detail.php?id=<?= $hd['id'] ?> ">
                        <?= $hd["nama_barang"] ?>
                    </a>   
                </p>
            <?php endforeach; ?>
        </class=>
</div>
</body>
<html>