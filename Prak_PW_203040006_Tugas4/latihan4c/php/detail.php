<?php
if(!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require '../php/function.php';
$id=$_GET["id"];
$data = query("SELECT * FROM hoddie WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Hooddie champions</title>
</head>

<body>
    <div class="container">
        <div class="detail">
            <img class="image" src="../assets/<?= $data['img'] ?>" alt="">
            <h3><?= $data['Nama Barang']?> <?= $hijab['Deskripsi']?></h3>
            <hr>
            <h6>Brand : <?= $data['Stok Barang']?> | Price : Rp.<?= $data['harga']?></h6>
            <a href="../index.php"><button class="button success"> Back</button> </a>
        </div>
    </div>


    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>