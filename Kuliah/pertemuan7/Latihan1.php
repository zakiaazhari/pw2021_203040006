<?php
/*
Zaki Auliya Azhari
203040006
https://github.com/zakiaazhari/pw2021_203040006.
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post
*/
?>
<?php
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040006",
		"nama" => "Zaki Auliya Azhari",
		"email" => "zakiaazhari14@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "zaki.jpg"
	],
	[
		"nama" => "Boy Hendra", 
		"nrp" => "203040060",
		"email" => "boyhendra@gmail.com",
		"jurusan" => "Teknik Mesin",
		"gambar" => "dom.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>