<?php 
require 'php/functions.php';
$data = query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2021_203040006/latihan4b/style.css">
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

    <title>Hoodie champions</title>
</head>
<body>
    
    <div class="container">
        <div class="table-primary"></div>
            <?php foreach ($data as $dt) :?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $dt['id'] ?>">
                        <?= $dt["hoddie"]?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    </div>

        </table>
    </div>
</body>
</html>