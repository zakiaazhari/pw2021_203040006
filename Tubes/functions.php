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
