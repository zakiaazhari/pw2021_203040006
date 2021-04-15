<?php
    //menghubungkan dengan file pp lainnya
    require 'php/function.php';

    //melakukkan query
    $data = query("SELECT * FROM data")
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Hoodie Champions</title>
</head>

<body>
    <div class="container">
        <?php foreach ($data as $dta) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $dta['id'] ?>">
                <?= $dta['nama'] ?>
            </a>
        </p>
        <?php endforeach; ?>
    </div>
</body>

</html>