<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

	/* 
    Nama : Zaki Auliya Azhari
    NRP : 203040006
    Kelas A
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Zaki"); ?></h1>
</body>
</html>