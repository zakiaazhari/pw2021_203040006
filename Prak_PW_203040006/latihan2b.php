<?php
// Zaki Auliya Azhari
// 203040006
// Shift Rabu 08.00 - 09.00
?>

<?php
$jawabanIsset = "Isset adalah = Digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br> <br>";
$jawabanEmpty = "Empty adalah = Digunakan untuk membuat sebuah validasi dengan php untuk melakukan pemeriksaan terhadap variabel-variabel yang berada di luar php.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style)
{
    echo "<div class = $style>
    <h1>" . $GLOBALS['isset'] . "</h1>
    <h1>" . $GLOBALS['empty'] . "</h1>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan2b_203040006</title>
    <style>
        .center {
            border: 1px solid black;
            padding-left: 10px;
            font-size: 8px;
            color: goldenrod;
            font-family: monospace;
            background-color: #222222;
        }
    </style>
</head>

<body>
    <?php
    echo soal("center");
    ?>
</body>

</html>