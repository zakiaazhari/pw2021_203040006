<?php
/*
Zaki Auliya Azhari
203040006
https://github.com/zakiaazhari/pw2021_203040006.
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai Array Associative
*/
?>
<?php
// $mahasiswa = [
// ["Zaki Auliya Azhari", "203040006", "zakiaazhari14@gmail.com"
//     , "Teknik Informatika"],
// ["M Farhan", "203040120", "mfarhan@gmail.com", "
//     Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Zaki Auliya Azhari", 
    "nrp" => "203040006",
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["jurusan"]; ?></li>
			<li>Jurusan  : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>