<?php
// Zaki Auliya Azhari
// 203040006
// Shift Rabu 08.00 - 09.00
?>

<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($m = 1; $m <= $i; $m++){
            echo "<div class = 'bola'>" . $i . "</div>";
        }
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Latihan2C_203040006</title>
    <style>
        .bola {
            border-radius: 50%;
            background-color: salmon;
            height: 50px;
            display: inline-block;
            margin: 2px;
            width: 50px;
            line-height: 50px;
            border: 1px solid black;
            text-align: center;

        }

        .line {
            border: 2px solid black;
            padding: 15px;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="line">
        <?php echo tumpukanBola(5); ?>
    </div>
</body>


</html>