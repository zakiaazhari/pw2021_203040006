<?php
/*
Zaki Auliya Azhari
203040006
https://github.com/zakiaazhari/pw2021_203040006.
Pertemuan 4 - 25 Februarari 2021
Mempelajari mengenai Function
*/
?>
<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));


/* 
    Nama : Zaki Auliya Azhari
    NRP : 203040006
    Kelas A
    Pertemuan ke 4
*/


// strtotime
echo date("l", strtotime("25 aug 1985"));






?>