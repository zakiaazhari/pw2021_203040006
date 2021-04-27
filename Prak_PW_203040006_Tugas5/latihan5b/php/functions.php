<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prak4_pw_203040006");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();


    $nama_barang = htmlspecialchars($data['nama_barang']);
    $deskripsi = htmlspecialchars($data['deskripsi$deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $foto = htmlspecialchars($data['foto']);

    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$foto', '$nama_barang', '$deskripsi', '$warna', '$harga', '$stok_barang')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
