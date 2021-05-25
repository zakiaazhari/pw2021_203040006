<?php

function koneksi()
{
  return mysqli_connect("localhost", "root", "", "prak4_pw_203040006");
}

function query($query)
{
  $conn = Koneksi();

  $result = mysqli_query($conn, $query);

  if ($result) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = ($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => "username / password salah"
  ];
}
function tambah($data)
{
  $conn = koneksi();

  $foto = htmlspecialchars($data['gambar']);
  $nama_barang = htmlspecialchars($data['nama_barang']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $warna = htmlspecialchars($data['warna']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO mahasiswa
            VALUES
            (null, '$foto', '$nama_barang','$deskripsi','$warna' ,'$harga' )";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // Jika username atau password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('Username atau Password Tidak Boleh Kososng!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi Password Tidak Sesuai!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('Password Terlalu Pendek!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // Jika username dan password sudah sesuai
  // Enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // Insert ke Tabel
  $query = "INSERT INTO user
              VALUES
            (null, '$username', '$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
