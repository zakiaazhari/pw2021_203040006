  <?php
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "prak4_pw_203040006") or die("Database salah!");
  $result = mysqli_query($conn, "SELECT * FROM t_hoddie");
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      img {
        height: 150px;
        ;
      }
    </style>
    <title>latihan4A</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <h1>Hoddie Champions</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Foto</th>
        <th>Deskripsi</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Stok Barang</th>
      </tr>
      <?php $i = 1; ?>
      <?php while ($hd = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="assets/<?= $hd["foto"]; ?>"></td>
          <td><?= $hd["nama_barang"]; ?></td>
          <td><?= $hd["deskripsi"]; ?></td>
          <td><?= $hd["warna"]; ?></td>
          <td><?= $hd["harga"]; ?></td>
          <td><?= $hd["stok_barang"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endwhile; ?>

    </table>
  </body>

  </html>