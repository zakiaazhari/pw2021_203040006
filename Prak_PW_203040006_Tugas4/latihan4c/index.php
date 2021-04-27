<?php
require 'php/functions.php';
$t_hoddie = query("SELECT * FROM t_hoddie")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4C</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php foreach ($t_hoddie as $hd) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $hd['id'] ?>">
                <?= $hd["nama_barang"] ?>
            </a>
        </p>
    <?php endforeach; ?>

    </table>
</body>

</html>