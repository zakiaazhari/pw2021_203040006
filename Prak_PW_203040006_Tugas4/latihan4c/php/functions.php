<?php
//fngsi untuk melakukan koneksi ke database
function koneksi()
{
    $koneksi = mysqli_connect("localhost", "root", "");
    mysqli_select_db($koneksi, "prak4_pw_203040006");

    return $koneksi;
}

//function untuk melakukkan querry dan memasukkannya kedalam array
function query($sql)
{
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
