<?php
/*
Zaki Auliya Azhari
203040006
https://github.com/zakiaazhari/pw2021_203040006.
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai Array
*/
?>
<?php 
$mahasiswa = [
	["Zaki Auliya Azhari", "203040006", "Teknik Informatika", "zakiaazhari14@gmail.com"],
	["M Farhan", "203040120", "Teknik Mesin", "mfarhan@yahoo.com"],
	["2030400", "Boy", "Teknik Pangan", "boy@gmail.com"]
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>
